<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportController extends Controller
{
    private function streamCsv(string $filename, array $headers, \Closure $rowIterator): StreamedResponse
    {
        $response = new StreamedResponse(function () use ($headers, $rowIterator) {
            $out = fopen('php://output', 'w');
            fputcsv($out, $headers);
            foreach ($rowIterator() as $row) {
                fputcsv($out, $row);
            }
            fclose($out);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
        return $response;
    }

    public function faculty(Request $request): StreamedResponse
    {
        $dept = $request->query('department');
        $search = $request->query('search');

        $q = User::query()->where('role', 'faculty');
        if ($dept) { $q->where('department_code', $dept); }
        if ($search) {
            $q->where(function ($qq) use ($search) {
                $qq->where('name', 'like', "%$search%")
                   ->orWhere('email', 'like', "%$search%")
                   ->orWhere('employee_no', 'like', "%$search%");
            });
        }

        $headers = ['Employee #','Name','Department','Status'];
        return $this->streamCsv('faculty_report.csv', $headers, function () use ($q) {
            return $q->orderBy('name')->cursor()->map(function (User $u) {
                return [
                    $u->employee_no ?: '-',
                    $u->name ?: '-',
                    $u->department_code ?: '-',
                    $u->status ?: '-',
                ];
            });
        });
    }

    public function students(Request $request): StreamedResponse
    {
        $dept = $request->query('department');
        $course = $request->query('course');
        $search = $request->query('search');

        $q = User::query()->where('role', 'student');
        if ($dept) { $q->where('department_code', $dept); }
        if ($course) { $q->where('course_code', $course); }
        if ($search) {
            $q->where(function ($qq) use ($search) {
                $qq->where('name', 'like', "%$search%")
                   ->orWhere('email', 'like', "%$search%")
                   ->orWhere('student_id', 'like', "%$search%");
            });
        }

        $headers = ['Student ID','Name','Department','Course','Status'];
        return $this->streamCsv('students_report.csv', $headers, function () use ($q) {
            return $q->orderBy('name')->cursor()->map(function (User $u) {
                return [
                    $u->student_id ?: '-',
                    $u->name ?: '-',
                    $u->department_code ?: '-',
                    $u->course_code ?: '-',
                    $u->status ?: '-',
                ];
            });
        });
    }
}


