import '../styles/globals.css'
import { useEffect } from 'react'
import { createClient } from '@supabase/supabase-js'

function MyApp({ Component, pageProps }) {
  return <Component {...pageProps} />
}

export default MyApp
