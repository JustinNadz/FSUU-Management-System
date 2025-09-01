import React, { useState, useEffect } from 'react'
import { Form, Input, Button, Card, Typography } from 'antd'
import { useNavigate } from 'react-router-dom'
import { signIn } from '../../utils/auth'
import { useLoading } from '../../components/LoadingProvider'

export default function Login() {
  const navigate = useNavigate()
  const { show, hide } = useLoading()
  
  // Background slideshow images
  const backgroundImages = [
    '/images/483513202_1056852476472838_6316450006899015384_n.jpg',
    '/images/484136905_1057518493072903_757151839868629814_n.jpg',
    '/images/486846412_1068688401955912_5174454029513321797_n.jpg',
    '/images/487548903_1068688451955907_2479139837699731331_n.jpg'
  ]
  
  const [currentImageIndex, setCurrentImageIndex] = useState(0)
  const [isTransitioning, setIsTransitioning] = useState(false)
  const [error, setError] = useState('')

  useEffect(() => {
    const interval = setInterval(() => {
      setIsTransitioning(true)
      setTimeout(() => {
        setCurrentImageIndex((prevIndex) => 
          prevIndex === backgroundImages.length - 1 ? 0 : prevIndex + 1
        )
        setIsTransitioning(false)
      }, 100)
    }, 4000) // Change image every 4 seconds

    return () => clearInterval(interval)
  }, [backgroundImages.length])

  const onFinish = async ({ identifier, password }) => {
    setError('')
    show()
    await new Promise(r => setTimeout(r, 800))
    const res = signIn(identifier, password)
    hide()
    if (res.ok) {
  if (res.auth.role === 'admin') navigate('/admin-dashboard')
  else if (res.auth.role === 'faculty') navigate('/faculty-dashboard')
  else if (res.auth.role === 'student') navigate('/student-dashboard')
    } else {
      setError(res.error || 'Invalid user ID or password')
    }
  }

  return (
    <div className="relative min-h-screen slideshow-container">
      {/* Animated Background Slideshow */}
      <div className="absolute inset-0">
        {backgroundImages.map((image, index) => (
          <div
            key={index}
            className="slideshow-slide"
            style={{
              backgroundImage: `url(${image})`,
              transform: `translateX(${(index - currentImageIndex) * 100}%)`,
            }}
          />
        ))}
      </div>
      
      {/* Animated overlay with gradient */}
      <div className="absolute inset-0 bg-gradient-to-br from-black/50 via-black/40 to-black/60 animate-pulse-slow" />
      
      {/* Content */}
      <div className="relative min-h-screen grid place-items-center px-4">
        <Card className="w-full max-w-md border border-white/20 bg-white/90 backdrop-blur-md rounded-2xl shadow-elevation-2 animate-slide-in animate-pulse-glow">
          <div className="text-center mb-4 animate-fade-in-up animation-delay-200">
            <img 
              src="/images/1-removebg-preview.png" 
              alt="FSUU" 
              className="mx-auto w-56 md:w-64 h-auto transform hover:scale-105 transition-transform duration-300" 
            />
          </div>
          <Form layout="vertical" onFinish={onFinish} className="animate-fade-in-up animation-delay-400">
            {error && (
              <div className="mb-3 px-3 py-2 rounded-md bg-red-50 border border-red-200 text-red-600 text-xs font-medium animate-fade-in">
                {error}
              </div>
            )}
            <Form.Item
              label="User ID"
              name="identifier"
              rules={[{ required: true, message: 'Please enter your user ID' }]}
              className="animate-fade-in-up animation-delay-600"
            >
              <Input 
                inputMode="numeric" 
                placeholder="Enter user ID" 
                className="transition-all duration-300 hover:shadow-md focus:shadow-lg" 
              />
            </Form.Item>
            <Form.Item 
              label="Password" 
              name="password" 
              rules={[{ required: true, message: 'Please enter your password' }]}
              className="animate-fade-in-up animation-delay-600"
            >
              <Input.Password 
                placeholder="••••••••" 
                className="transition-all duration-300 hover:shadow-md focus:shadow-lg" 
              />
            </Form.Item>
            <Form.Item className="animate-fade-in-up animation-delay-600">
              <Button 
                type="primary" 
                htmlType="submit" 
                block 
                style={{ height: 44 }}
                className="transition-all duration-300 hover:scale-105 hover:shadow-lg"
              >
                Sign in
              </Button>
            </Form.Item>
            <div className="text-center animate-fade-in-up animation-delay-600">
              <Button 
                type="link" 
                onClick={() => navigate('/reset-password')}
                className="transition-all duration-300 hover:scale-105"
              >
                Forgot password?
              </Button>
            </div>
          </Form>
        </Card>
      </div>
    </div>
  )
}


