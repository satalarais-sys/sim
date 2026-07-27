#!/usr/bin/env node
/**
 * scripts/create-admin.js
 * Usage: set SUPABASE_SERVICE_ROLE_KEY and NEXT_PUBLIC_SUPABASE_URL in env then run:
 * node scripts/create-admin.js admin@example.com Password123!
 */

const { createClient } = require('@supabase/supabase-js')

const url = process.env.NEXT_PUBLIC_SUPABASE_URL
const serviceKey = process.env.SUPABASE_SERVICE_ROLE_KEY

if (!url || !serviceKey) {
  console.error('Missing NEXT_PUBLIC_SUPABASE_URL or SUPABASE_SERVICE_ROLE_KEY in env')
  process.exit(1)
}

const supabase = createClient(url, serviceKey)

async function main() {
  const args = process.argv.slice(2)
  if (args.length < 2) {
    console.error('Usage: node scripts/create-admin.js EMAIL PASSWORD')
    process.exit(1)
  }
  const [email, password] = args

  // create user via Admin API
  const { data, error } = await supabase.auth.admin.createUser({
    email,
    password,
    email_confirm: true,
    user_metadata: { role: 'super-admin' }
  })

  if (error) {
    console.error('Failed to create user:', error)
    process.exit(1)
  }

  console.log('Created admin user:', data)
}

main()
