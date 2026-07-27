export default function LoansIndex() {
  return (
    <div className="max-w-4xl mx-auto p-6">
      <h1 className="text-2xl font-semibold mb-4">Loans</h1>
      <p><a href="/loans/create" className="text-blue-600">Create Loan</a></p>
      <table className="w-full mt-4 border-collapse">
        <thead>
          <tr className="bg-gray-100"><th className="p-2">#</th><th className="p-2">Loan Number</th><th className="p-2">Member</th><th className="p-2">Principal</th></tr>
        </thead>
        <tbody>
          <tr><td className="p-2">1</td><td className="p-2">L-0001</td><td className="p-2">Contoh Anggota</td><td className="p-2">1000000</td></tr>
        </tbody>
      </table>
    </div>
  )
}
