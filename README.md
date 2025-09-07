# Ssionn Starter Kit

A **Laravel Blade‑only starter kit** with a clean, responsive layout and pre‑built UI components.  
No Inertia, no Livewire, no heavy JS frameworks — just **Blade, TailwindCSS, and a little vanilla JS (Flowbite)**.  

---

## ✨ Features

- ⚡ **Blade‑only** — no Vue/React, just Laravel Blade components  
- 🎨 **TailwindCSS v4** — modern utility‑first styling  
- 📦 **Pre‑built components**:
  - Sidebar with responsive slide‑in/out (Work in progress, need to polish some area's)  
  - Header with page title
  - Dropdowns, buttons, cards, alerts (Buttons and alerts not made yet) 
- 🌗 **Dark mode ready** (toggle via `dark` class. Still a work in progress though)
- 📱 **Responsive layout** — works out of the box on mobile & desktop (Sure... No but seriously need to polish some of the rough edges)

---

## 🚀 Getting Started

### 1. Install Laravel
```bash
laravel new --using=Ssionn/SSK
cd SSK
```

### 2. Install dependencies
```bash
composer install
npm install
npm run dev
```

### 3. Use the Layout
In your Blade views, extend the layout:

```blade
<!-- Page title is required! -->
<x-layouts.app :page-title="Dashboard">
    <h1 class="text-xl font-bold">Hello world!</h1>
</x-layouts.app>
```

---

## 📂 Preview

```
components/
├── layouts/
│   ├── assets/
│   │   └── application-logo.blade.php
│   ├── app.blade.php
│   ├── header.blade.php
│   └── sidebar.blade.php
└── user-interface/
    ├── layouts/
    │   └── sidebar/
    │       ├── sidebar-list.blade.php
    │       ├── sidebar-list-item.blade.php
    │       └── user-profile/
    │           ├── user-card.blade.php
    │           ├── user-icon.blade.php
    │           ├── user-image.blade.php
    │           └── user-info.blade.php
```

---

## 🖼️ Screenshots (Not final)

### Desktop Layout
<img width="1634" height="898" alt="image" src="https://github.com/user-attachments/assets/86bf5c2b-de63-4d2e-b5dd-0671fe14e2b3" />

---

## ⚡ Customization

- Update colors in `app.css`
- Replace `<x-layouts.assets.application-logo />` with your own logo  
- Add/remove Blade components as needed  

---

## 📜 License

MIT — free to use, modify, and share  
