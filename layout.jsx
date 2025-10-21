/messages
  ├─ en.json
  └─ ar.json

,,,,,,
en.json
,,,,


{
  "hello": "Hello",
  "welcome": "Welcome to my website"
}

,,,,,
ar.json
,,,,


{
  "hello": "مرحبا",
  "welcome": "مرحباً بك في موقعي"
}

,,,,, 
layout 
,,,,, 


import { Inter, Cairo } from "next/font/google";
import Script from "next/script";
import "./globals.css";
import { cookies } from "next/headers";
import { NextIntlProvider } from "next-intl";

const inter = Inter({ subsets: ["latin"] });
const cairo = Cairo({ subsets: ["arabic", "latin"] });

export const metadata = {
  title: "DevPortfolio",
  description: "web development",
};

// Ensure layout is not statically cached so it picks up the lang cookie per request
export const dynamic = "force-dynamic";
export const revalidate = 0;

export default function RootLayout({ children }) {
  const cookieStore = cookies();
  const cookieLang = cookieStore.get("lang")?.value;

  // Default to Arabic unless cookie explicitly 'en'
  const lang = cookieLang === "en" ? "en" : "ar";
  const dir = lang === "ar" ? "rtl" : "ltr";
  const fontClass = lang === "ar" ? cairo.className : inter.className;

  // Load messages for the current locale
  let messages;
  try {
    messages = require(`../messages/${lang}.json`);
  } catch (e) {
    console.error(`No messages found for locale "${lang}"`);
    messages = {};
  }

  return (
    <html lang={lang} dir={dir} className="dark scroll-smooth">
      <body className={`${fontClass} bg-gray-950 text-gray-100 antialiased`}>
        <NextIntlProvider messages={messages} locale={lang}>
          {/* Google Tag Manager Script */}
          <Script id="gtm-script" strategy="afterInteractive">
            {`(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KM4HH3WQ');`}
          </Script>

          <noscript>
            <iframe
              src="https://www.googletagmanager.com/ns.html?id=GTM-KM4HH3WQ"
              height="0"
              width="0"
              style={{ display: "none", visibility: "hidden" }}
            />
          </noscript>

          {/* Render children */}
          {children}
        </NextIntlProvider>
      </body>
    </html>
  );
}
