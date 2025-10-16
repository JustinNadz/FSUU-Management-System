import React from 'react'
import Routes from './Routes'
import { ConfigProvider, theme } from 'antd'
import LoadingProvider from './components/LoadingProvider'

export default function App() {
  return (
    <ConfigProvider
      theme={{
        algorithm: theme.defaultAlgorithm,
        token: {
          colorPrimary: '#2196F3',
          borderRadius: 8,
        },
      }}
    >
      <LoadingProvider>
        <Routes />
      </LoadingProvider>
    </ConfigProvider>
  )
}


