import React from 'react'
import { Form, Input, Button, Card, Typography } from 'antd'

export default function ResetPassword() {
  const onFinish = () => {
    // Simulate request; in real app, call API to send reset link/code
  }

  return (
    <div className="min-h-screen grid place-items-center bg-background px-4">
      <Card className="w-full max-w-md border border-border">
        <div className="text-center mb-4">
          <Typography.Title level={3} style={{ marginBottom: 0 }}>Reset Password</Typography.Title>
          <Typography.Text type="secondary">Enter your student number to receive reset instructions</Typography.Text>
        </div>
        <Form layout="vertical" onFinish={onFinish}>
          <Form.Item label="Student Number" name="studentNumber" rules={[{ required: true, message: 'Please enter your student number' }]}>
            <Input inputMode="numeric" placeholder="e.g. 2024-000123" />
          </Form.Item>
          <Form.Item>
            <Button type="primary" htmlType="submit" block>Send reset link</Button>
          </Form.Item>
        </Form>
      </Card>
    </div>
  )
}


