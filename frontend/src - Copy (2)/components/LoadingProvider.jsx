import React, { createContext, useContext, useMemo, useState } from 'react'

const LoadingContext = createContext({ show: () => {}, hide: () => {}, isLoading: false })

export function useLoading() { return useContext(LoadingContext) }

export default function LoadingProvider({ children }) {
  const [isLoading, setIsLoading] = useState(false)
  const value = useMemo(() => ({ isLoading, show: () => setIsLoading(true), hide: () => setIsLoading(false) }), [isLoading])
  return (
    <LoadingContext.Provider value={value}>
      {children}
      {isLoading && (
        <div className="fixed inset-0 z-[9999] grid place-items-center" style={{ background: 'linear-gradient(180deg, #1E4DB3 0%, #1C3F9A 35%, #24308F 60%, #2B1E88 100%)' }}>
          <div className="text-center animate-fade-in">
            <img src="/images/326319243_1186313552001605_2507428058393999247_n-removebg-preview.png" alt="loading" className="w-56 md:w-64 h-auto mx-auto mb-8 drop-shadow-[0_6px_16px_rgba(0,0,0,.45)]" />
            <div className="w-16 h-16 border-4 border-white/30 border-t-white rounded-full animate-spin mx-auto"></div>
          </div>
        </div>
      )}
    </LoadingContext.Provider>
  )
}


