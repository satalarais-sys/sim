import Link from 'next/link'

export default function MembersIndex() {
  return (
    <div className="max-w-4xl mx-auto p-6">
      <h1 className="text-2xl font-semibold mb-4">Members</h1>
      <p><Link href="/members/create"><a className="text-blue-600">Create Member</a></Link></p>
      <table className="w-full mt-4 border-collapse">
        <thead>
          <tr className="bg-gray-100"><th className="p-2">#</th><th className="p-2">Member Number</th><th className="p-2">Name</th><th className="p-2">Email</th></tr>
        </thead>
        <tbody>
          <tr><td className="p-2">1</td><td className="p-2">M-0001</td><td className="p-2">Contoh Anggota</td><td className="p-2">member@example.com</td></tr>
        </tbody>
      </table>
    </div>
  )
}
