import Head from 'next/head'
import Link from 'next/link'

export default function Home() {
  return (
    <div className="min-h-screen bg-gray-50">
      <Head>
        <title>SIM - Dashboard</title>
      </Head>
      <main className="max-w-4xl mx-auto p-6">
        <h1 className="text-2xl font-bold mb-4">Sistem Informasi Management (SIM)</h1>
        <p className="mb-4">Next.js + Supabase scaffold. Deploy to Vercel and set Supabase env keys.</p>
        <div className="space-x-4">
          <Link href="/dashboard"><a className="text-blue-600">Dashboard</a></Link>
          <Link href="/members"><a className="text-blue-600">Members</a></Link>
          <Link href="/loans"><a className="text-blue-600">Loans</a></Link>
        </div>
      </main>
    </div>
  )
}
