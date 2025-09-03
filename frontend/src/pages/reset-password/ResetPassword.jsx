import React, { useState, useEffect } from 'react'
import { Form, Input, Button, Card, Typography } from 'antd'
import { useNavigate } from 'react-router-dom'
import Icon from '../../components/AppIcon'

export default function ResetPassword() {
  const navigate = useNavigate()
  const [loading, setLoading] = useState(false)
  const [success, setSuccess] = useState(false)
  const [error, setError] = useState('')
  
  // Background slideshow images (same as login)
  const backgroundImages = [
    '/images/483513202_1056852476472838_6316450006899015384_n.jpg',
    '/images/484136905_1057518493072903_757151839868629814_n.jpg',
    '/images/486846412_1068688401955912_5174454029513321797_n.jpg',
    '/images/487548903_1068688451955907_2479139837699731331_n.jpg'
  ]
  
  const [currentImageIndex, setCurrentImageIndex] = useState(0)
  const [isTransitioning, setIsTransitioning] = useState(false)

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

  const onFinish = async (values) => {
    setError('')
    setLoading(true)
    
    try {
      // Simulate API call
      await new Promise(resolve => setTimeout(resolve, 2000))
      
      // Check if it's a valid user (demo validation)
      const validUsers = ['23100000758', 'T-001', 'admin']
      if (validUsers.includes(values.identifier)) {
        setSuccess(true)
      } else {
        setError('User not found. Please check your user ID and try again.')
      }
    } catch (err) {
      setError('Something went wrong. Please try again.')
    } finally {
      setLoading(false)
    }
  }

  if (success) {
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
            <div className="text-center mb-6 animate-fade-in-up animation-delay-200">
              <div className="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <Icon name="CheckCircle" size={32} className="text-green-600" />
              </div>
              <Typography.Title level={3} style={{ marginBottom: 8, color: '#059669' }}>Reset Link Sent!</Typography.Title>
              <Typography.Text type="secondary" className="text-sm">
                We've sent password reset instructions to your registered email address. 
                Please check your inbox and follow the instructions to reset your password.
              </Typography.Text>
            </div>
            <div className="space-y-3 animate-fade-in-up animation-delay-400">
              <Button 
                type="primary" 
                block 
                onClick={() => navigate('/login')}
                className="h-11 transition-all duration-300 hover:scale-105 hover:shadow-lg"
              >
                Back to Login
              </Button>
              <Button 
                block 
                onClick={() => setSuccess(false)}
                className="h-11 transition-all duration-300 hover:scale-105"
              >
                Try Another User ID
              </Button>
            </div>
          </Card>
        </div>
      </div>
    )
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
          <div className="text-center mb-6 animate-fade-in-up animation-delay-200">
            <img 
              src="/images/1-removebg-preview.png" 
              alt="FSUU" 
              className="mx-auto w-48 md:w-56 h-auto transform hover:scale-105 transition-transform duration-300 mb-4" 
            />
            <Typography.Title level={3} style={{ marginBottom: 8 }}>Reset Password</Typography.Title>
            <Typography.Text type="secondary" className="text-sm">
              Enter your user ID to receive reset instructions
            </Typography.Text>
          </div>
          
          <Form layout="vertical" onFinish={onFinish} className="animate-fade-in-up animation-delay-400">
            {error && (
              <div className="mb-4 px-3 py-2 rounded-md bg-red-50 border border-red-200 text-red-600 text-xs font-medium animate-fade-in">
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
                placeholder="e.g. T-001" 
                className="transition-all duration-300 hover:shadow-md focus:shadow-lg h-11" 
              />
            </Form.Item>
            
            <Form.Item className="animate-fade-in-up animation-delay-600">
              <Button 
                type="primary" 
                htmlType="submit" 
                block 
                loading={loading}
                className="h-11 transition-all duration-300 hover:scale-105 hover:shadow-lg"
              >
                {loading ? 'Sending...' : 'Send Reset Instructions'}
              </Button>
            </Form.Item>
            
            <div className="text-center animate-fade-in-up animation-delay-600">
              <Button 
                type="link" 
                onClick={() => navigate('/login')}
                className="transition-all duration-300 hover:scale-105"
              >
                Back to Login
              </Button>
            </div>
          </Form>
        </Card>
      </div>
    </div>
  )
}


