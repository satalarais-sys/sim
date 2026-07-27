export default function LoanCreate() {
  return (
    <div className="max-w-4xl mx-auto p-6">
      <h1 className="text-2xl font-semibold mb-4">Create Loan</h1>
      <form>
        <div className="mb-2"><label className="block">Loan Number</label><input className="border p-2 w-full"/></div>
        <div className="mb-2"><label className="block">Member ID</label><input className="border p-2 w-full"/></div>
        <div className="mb-2"><label className="block">Principal</label><input className="border p-2 w-full"/></div>
        <button className="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
      </form>
    </div>
  )
}
