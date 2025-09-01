import React from 'react'
import { createRoot } from 'react-dom/client'
import App from './App'
import './styles/tailwind.css'
import './styles/index.css'
import 'antd/dist/reset.css'
import './styles/theme.scss'

const rootEl = document.getElementById('root')
createRoot(rootEl).render(<App />)


