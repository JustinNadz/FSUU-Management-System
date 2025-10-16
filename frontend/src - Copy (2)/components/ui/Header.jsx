import React, { useState } from 'react'
import Icon from '../AppIcon'
import Button from './Button'

export default function Header() {
  const [isAlertPanelOpen, setIsAlertPanelOpen] = useState(false)
  const alerts = [
    { id: 1, type: 'error', message: 'Color contrast violation detected in Button component', time: '2 min ago' },
    { id: 2, type: 'warning', message: 'Typography inconsistency in Card headers', time: '15 min ago' }
  ]
  return (
    <header className="fixed top-0 left-0 right-0 z-50 bg-surface border-b border-border shadow-elevation-1">
      <div className="flex items-center justify-between h-16 px-6">
        <div className="flex items-center space-x-3">
          <div className="w-8 h-8 bg-primary rounded-lg flex items-center justify-center"><Icon name="BarChart3" size={20} color="white" /></div>
          <h1 className="text-lg font-semibold text-text-primary">Design Analytics</h1>
        </div>
        <div className="flex items-center gap-2">
          <Button variant="ghost" size="icon" onClick={() => setIsAlertPanelOpen(p => !p)} className="relative">
            <Icon name="Bell" size={20} />
            {alerts.length > 0 && <span className="absolute -top-1 -right-1 w-5 h-5 bg-error text-white text-xs rounded-full grid place-items-center">{alerts.length}</span>}
          </Button>
        </div>
      </div>
    </header>
  )
}

