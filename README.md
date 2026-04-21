## Installation

- Animation

```
Cinema 4D
```

```
https://forms.office.com/Pages/ResponsePage.aspx?id=r0AoknVLyUGjlv2IF7jJVQisexMc5sdAroP4sz5hT8dUOEZaTkxUNzZPNlJYVlAwUDNYTDJCOUVUMy4u&fbclid=IwZXh0bgNhZW0CMTEAAR7N1UxHW6Hz7gcmFvVWdkc4HpXnTyY642e0zbYzZDt_KHqJCz0-2oRVsNcX-w_aem_xRrOx0DtqddbqBWFyUVw9w
```

```
https://hyper3d.ai/
```

```
https://www.krea.ai/3d
```


<br>

- Website 


```
https://nostalgic-css.github.io/NES.css/
```

```
https://flexboxlabs.netlify.app/
```

```
https://m.youtube.com/watch?v=AKdMXlcbW-E
```

```
https://github.com/DevNexEssam/portofolio-v1/tree/main?fbclid=IwZXh0bgNhZW0CMTEAAR1rGK68b2PQIML-hQJIBvKStfctNChjrQlKiY_AvAJq1rLSWCyMHQr2pAE_aem_jRdviPvNGU8m-MPZvWpGVw
```

```
https://satr.codes/
```

```
https://www.coursat.org/
```

```
https://www.deeplearning.ai/courses/?courses_date_desc%5Bpage%5D=4
```

```
https://github.com/TokisanGames
```

```
https://www.cursor.com/
```

```
https://chef.convex.dev/
```

```
https://bolt.new/
```

```
https://www.swing2app.com
```

```
https://github.com/HuzaifAhmed01/
```

```
https://scansmatter.com/home
```

```
https://dev-hussein-alsayed.vercel.app/?fbclid=IwZXh0bgNhZW0CMTEAAR6XDUzs41Ssb5zZZGfpFIqyo0oX3XHocflLfHP9QuFveiJjal1oJkXRyfcJ8A_aem_eIcyinmpN_hQPcfDcyaaVA
```

```
https://ahmadadham.vercel.app/en
```

```
https://khaledhassan-portfolio.vercel.app/
```

```
https://github.com/tastejs/next-movies
```

```
npm install react-lazy-load-image-component
```

```
https://github.com/Hussein-AbdElRazek/it-legend-task
```

```
https://lightswind.com/
```

```
https://chat.z.ai/
```

```
https://tweakcn.com/
```


<br>

- Laravel 


```
composer global update laravel/installer
```


```
composer create-project laravel/laravel:^13.0 example-app
```


```
php artisan serve --port 9000
```


```
php artisan serve
```

<br>

- Firebase 🔥


```
npm install -g firebase-tools
```
```
firebase login 
```
<br>

- Flutter 🐦


```
https://m.youtube.com/watch?v=Vu1t4sJ4g8U&pp=0gcJCWIABgo59PVc
```

<br>

- react

```
npm install react
```

```
npm run build
```

```
npm start
```

```
npm run dev
```

<br>

```
Design a production-ready multi-tenant shipping SaaS platform using:

Frontend: Next.js (App Router, TypeScript, TailwindCSS)
Backend: Laravel (REST API, Sanctum Auth, Multi-Tenancy)

---

🏗️ SYSTEM ARCHITECTURE:

- API-first architecture (Laravel backend + Next.js frontend)
- Multi-tenant system using tenant_id (single database)
- Secure authentication using Laravel Sanctum (SPA mode)
- Role-based access control (RBAC)
- Real-time features via WebSockets (Laravel Echo + Pusher or Socket.io)

---

📦 FRONTEND REQUIREMENTS (Next.js):

- App Router structure
- Server Components + Client Components where needed
- Dashboard layout with sidebar + topbar
- State management using React Query or Zustand
- API layer abstraction (Axios or Fetch wrapper)
- Protected routes (middleware-based)
- Dynamic routing for tenants and orders

---

🧭 MAIN PAGES:

1. /admin (Super Admin Dashboard)
2. /stores (Tenants Management)
3. /plans (Subscription Plans)
4. /dashboard (Store Dashboard)
5. /orders
6. /orders/create
7. /dispatch
8. /drivers
9. /tracking
10. /finance/reconciliation
11. /finance/invoices
12. /zones
13. /integrations
14. /api-monitoring

---

🧱 COMPONENT SYSTEM:

- Reusable UI components:
  
  - DataTable
  - StatCard
  - MapView
  - StatusBadge
  - Modal
  - FormBuilder

- Design system using Tailwind + Headless UI

---

🔐 AUTHENTICATION FLOW:

- Login via Laravel Sanctum
- Store token in HTTP-only cookies
- Middleware protection in Next.js
- Role-based UI rendering

---

🚀 BACKEND (Laravel):

- RESTful API
- Global Scope for tenant isolation
- Service Layer (OrderService, DispatchService)
- Repository pattern (optional)
- API Resources for responses

---

📊 DATABASE STRUCTURE:

Core tables:

- tenants
- users
- roles
- orders
- drivers
- zones
- invoices
- settlements
- api_keys

All tables must include:
tenant_id (except global tables like plans)

---

⚡ REAL-TIME FEATURES:

- Live driver tracking
- Order status updates
- Notifications

Using:
Laravel Echo + WebSockets

---

💰 BILLING SYSTEM:

- Subscription plans
- Monthly billing
- Auto-disable expired stores
- Usage-based pricing (per order)

---

📱 DRIVER APP (OPTIONAL):

- Can be built with Next.js (PWA) or React Native
- Features:
  - Assigned orders
  - Navigation
  - Status updates
  - Proof of delivery

---

🎨 UI STYLE:

- Modern SaaS dashboard (Stripe-like)
- Clean spacing, minimal clutter
- Light & Dark mode
- Primary color: Indigo/Blue

---

🧪 OUTPUT REQUIRED:

- Full UI screens
- Component hierarchy
- API endpoints structure
- Example code snippets (Next.js + Laravel)
- Folder structure for both frontend and backend

---

Design a modern, scalable multi-tenant shipping platform (SaaS) that serves multiple e-commerce stores.

The system should follow a clean, professional dashboard style (similar to Stripe, Shopify, or Uber Freight dashboards), with strong UX hierarchy, responsive layout, and data-driven components.

---

🏗️ Architecture Context:

- Multi-tenant system (Single DB with tenant_id)
- Role-based access control
- API-first platform
- Real-time tracking support

---

👥 User Roles:

1. Super Admin (Platform Owner)
2. Store Owner
3. Store Staff
4. Dispatcher
5. Driver
6. Accountant

Each role must have a tailored dashboard and permissions.

---

🧭 CORE DASHBOARDS & SCREENS

1) Super Admin Dashboard:

- Total stores
- Total orders
- Active deliveries
- Total revenue
- Shipping fees
- Drivers count
- Live delivery map
- System alerts

---

2) Store Management (Tenants):

- Store name, logo, domain/API key
- Phone, city
- Subscription status & plan
- Orders count
- Balance

Actions:

- Add / Edit / Disable / Activate store
- Upgrade plan
- Manage API keys

---

3) Subscription Plans:

- Plan name
- Price
- Order limits
- Drivers limit
- Features (API access, priority support)

---

4) Store Dashboard:

- Today’s orders
- In delivery
- Delivered
- Returns
- Revenue
- Cash collection
- Region-based analytics

---

5) Orders Management:

- Order ID (store + internal)
- Customer name & phone
- Address & zone
- Shipping fee
- Status
- Assigned driver
- Date

Filters:

- Status
- Date
- City
- Driver

---

6) Create Order Screen:

- Customer info
- Map location picker
- Products list
- Total amount
- Payment method
- Shipping zone
- Notes

---

🚚 DELIVERY MANAGEMENT

7) Dispatch Panel:

- Unassigned orders list
- Available drivers
- Live map
- Nearest driver suggestion
- Bulk assign
- SLA priority

---

8) Drivers Management:

- Name, phone
- Vehicle type
- Status (active / busy)
- Current orders
- Rating
- Cash in hand

---

9) Live Tracking Screen:

- Real-time map
- Driver locations
- Active deliveries
- ETA

---

💰 FINANCIAL MODULE

10) Cash Reconciliation:

- Driver
- Collected cash
- Delivered orders
- Difference
- Settlement status
- History log

---

11) Store Invoices:

- Store name
- Orders count
- Shipping fees
- Platform commission
- Net payout
- Payment status

---

⚙️ ADVANCED ADMIN

12) Zones & Pricing:

- Zone name
- City
- Delivery fee
- Delivery time
- Store-specific or global pricing

---

13) Integrations:

- API Keys
- Webhooks
- Shopify / WooCommerce integration
- Auto-import orders

---

📊 API Monitoring:

- Requests count
- Errors
- Response time

---

📱 DRIVER APP (Mobile UI):

- Login
- Assigned orders
- Order details
- Call customer
- Start delivery
- Mark delivered / returned
- Upload photo
- Signature capture
- Navigation map

---

🎨 DESIGN STYLE:

- Clean SaaS dashboard UI
- Use cards, tables, charts
- Light & dark mode
- Modern typography (Inter / SF Pro)
- Subtle shadows and spacing
- Map integration (Google Maps style)
- Color palette: blue / indigo primary with neutral grays

---

⚡ ADVANCED FEATURES:

- Auto dispatch (distance-based)
- Route optimization
- SLA monitoring
- SMS notifications
- WebSocket live tracking
- Wallet system per store
- Custom commission per store
- Smart returns handling
- Customer blacklist system

---

🔐 SECURITY:

- Strict tenant data isolation
- No cross-tenant access
- Role-based permissions

---

Output:

- High-fidelity UI screens
- Dashboard layouts
- Mobile + desktop responsive views
- Component-based design system
```
