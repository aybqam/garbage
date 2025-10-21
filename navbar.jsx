/messages
  ├─ en.json
  └─ ar.json


,,,,,,, 
en.json
,,,,,, 


{
  "nav": {
    "home": "Home",
    "about": "About",
    "skills": "Skills",
    "projects": "Projects",
    "contact": "Contact"
  }
}


,,,,,, 
ar.json
,,,,,, 


{
  "nav": {
    "home": "الرئيسية",
    "about": "نبذة",
    "skills": "المهارات",
    "projects": "المشاريع",
    "contact": "تواصل"
  }
}



,,,,,,
navbar
,,,,,,


"use client"

import { useState, useEffect } from "react";
import Link from "next/link";
import { Menu, X, Github } from "lucide-react";
import { useTranslations } from "next-intl";

export default function Navbar() {
  const t = useTranslations(); // <- use translations
  const [isOpen, setIsOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const [lang, setLang] = useState("en");

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 50);
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  useEffect(() => {
    if (typeof document !== "undefined") {
      setLang(document.documentElement.lang === "ar" ? "ar" : "en");
    }
  }, []);

  const switchLang = (target) => {
    if (typeof document === "undefined") return;
    const expires = new Date();
    expires.setFullYear(expires.getFullYear() + 1);
    document.cookie = `lang=${target}; path=/; expires=${expires.toUTCString()}`;
    window.location.reload();
  };

  const navLinks = [
    { name: t("nav.home"), href: "#home" },
    { name: t("nav.about"), href: "#about" },
    { name: t("nav.skills"), href: "#skills" },
    { name: t("nav.projects"), href: "#projects" },
    { name: t("nav.contact"), href: "#contact" },
  ];

  return (
    <header
      className={`fixed top-0 w-full z-50 transition-all duration-300 ${
        scrolled ? "bg-gray-900/90 backdrop-blur-md py-3 shadow-md" : "bg-transparent py-5"
      }`}
    >
      <div className="container mx-auto px-4 md:px-6">
        <div className="flex items-center justify-between">
          <Link href="/" className="text-xl font-bold">
            <span className="bg-gradient-to-r from-purple-500 to-blue-500 bg-clip-text text-transparent">
              Dev<span className="text-white">Portfolio</span>
            </span>
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center gap-8">
            {navLinks.map((link) => (
              <div key={link.name}>
                <Link
                  href={link.href}
                  className="text-gray-300 hover:text-white transition-colors relative group"
                >
                  <span suppressHydrationWarning>{link.name}</span>
                  <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </Link>
              </div>
            ))}
          </nav>

          {/* Social Icons + Language Toggle */}
          <div className="hidden md:flex items-center gap-4">
            <a
              href="https://github.com/Win11HW"
              target="_blank"
              rel="noopener noreferrer"
              className="text-gray-400 hover:text-white transition-all hover:-translate-y-1 duration-200"
            >
              <Github size={20} />
            </a>
            <button
              type="button"
              onClick={() => switchLang(lang === "ar" ? "en" : "ar")}
              className="px-3 py-1 rounded-full bg-transparent text-white text-xs tracking-wider border border-white hover:bg-white/20 transition"
              aria-label="Toggle language"
            >
              {lang === "ar" ? "EN" : "AR"}
            </button>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden text-gray-300 hover:text-white"
            onClick={() => setIsOpen(!isOpen)}
          >
            {isOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>
      </div>

      {/* Mobile Navigation */}
      <div
        className={`md:hidden bg-gray-900 shadow-lg transition-all duration-300 ${
          isOpen ? "opacity-100 max-h-96" : "opacity-0 max-h-0 overflow-hidden"
        }`}
      >
        <div className="container mx-auto px-4 py-4">
          <nav className="flex flex-col space-y-4">
            {navLinks.map((link) => (
              <Link
                key={link.name}
                href={link.href}
                className="text-gray-300 hover:text-white py-2 transition-colors"
                onClick={() => setIsOpen(false)}
              >
                <span suppressHydrationWarning>{link.name}</span>
              </Link>
            ))}
            <div className="flex items-center justify-between pt-4 border-t border-gray-800">
              <a
                href="https://github.com/Win11HW"
                target="_blank"
                rel="noopener noreferrer"
                className="text-gray-400 hover:text-white"
              >
                <Github size={20} />
              </a>
              <button
                type="button"
                onClick={() => switchLang(lang === "ar" ? "en" : "ar")}
                className="px-4 py-2 rounded-full bg-transparent text-white text-sm font-semibold tracking-wider border-2 border-white hover:bg-white/20 transition"
                aria-label="Toggle language"
              >
                {lang === "ar" ? "EN" : "AR"}
              </button>
            </div>
          </nav>
        </div>
      </div>
    </header>
  );
}
