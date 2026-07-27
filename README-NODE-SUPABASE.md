# SIM - Next.js + Supabase scaffold (branch: node-supabase)

This branch contains a Next.js starter app wired for Supabase. It includes:

- Next.js + Tailwind setup
- supabase client helper (lib/supabaseClient.js)
- SQL schema file for Supabase (sql/schema.sql)
- Basic pages: index, dashboard, members, loans
- scripts/create-admin.js: CLI script to create admin using SUPABASE_SERVICE_ROLE_KEY (you run it locally)

How to use (local)
1. Copy .env.example to .env and set keys:
   NEXT_PUBLIC_SUPABASE_URL=https://djoohbtqrogngbvvioig.supabase.co
   NEXT_PUBLIC_SUPABASE_ANON_KEY=pk_...   # Supabase anon key
   SUPABASE_SERVICE_ROLE_KEY=sk_...       # Keep secret (server-only)

2. Install deps & run dev:
   npm ci
   npm run dev

3. Create tables in Supabase:
   - Go to Supabase project SQL editor and run `sql/schema.sql` or use the SQL file content.

4. To create admin (recommended to run locally):
   - Set SUPABASE_SERVICE_ROLE_KEY and NEXT_PUBLIC_SUPABASE_URL in your local env
   - Run: node scripts/create-admin.js admin@example.com Password123!

Deploy to Vercel (recommended)
- Push branch node-supabase to GitHub (already done).
- In Vercel, create a new project from GitHub repo and select `node-supabase` branch.
- Set Environment Variables in Vercel dashboard (Project Settings -> Environment Variables):
  - NEXT_PUBLIC_SUPABASE_URL
  - NEXT_PUBLIC_SUPABASE_ANON_KEY
  - SUPABASE_SERVICE_ROLE_KEY (set as "Secret" scope, do NOT expose to client)
- Deploy. Vercel will run `npm run build` automatically.

Security notes
- Do NOT commit SUPABASE_SERVICE_ROLE_KEY to the repository.
- Rotate keys if they have been exposed.

