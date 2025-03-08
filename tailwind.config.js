/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./template-parts/**/*.{php,html,js}",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "var(--primary-500)",
          100: "var(--primary-100)",
          200: "var(--primary-200)",
          300: "var(--primary-300)",
          400: "var(--primary-400)",
          500: "var(--primary-500)",
          main: "var(--primary-500)",
          600: "var(--primary-600)",
          700: "var(--primary-700)",
          800: "var(--primary-800)",
          900: "var(--primary-900)"
        },
        secondary: {
          DEFAULT: "var(--secondary-500)",
          100: "var(--secondary-100)",
          200: "var(--secondary-200)",
          300: "var(--secondary-300)",
          400: "var(--secondary-400)",
          500: "var(--secondary-500)",
          main: "var(--secondary-500)",
          600: "var(--secondary-600)",
          700: "var(--secondary-700)",
          800: "var(--secondary-800)",
          900: "var(--secondary-900)"
        },
        light: {
          DEFAULT: "var(--light-500)",
          100: "var(--light-100)",
          200: "var(--light-200)",
          300: "var(--light-300)",
          400: "var(--light-400)",
          500: "var(--light-500)",
          main: "var(--light-500)",
          600: "var(--light-600)",
          700: "var(--light-700)",
          800: "var(--light-800)",
          900: "var(--light-900)"
        },
        info: {
          DEFAULT: "var(--info-500)",
          100: "var(--info-100)",
          200: "var(--info-200)",
          300: "var(--info-300)",
          400: "var(--info-400)",
          500: "var(--info-500)",
          main: "var(--info-500)",
          600: "var(--info-600)",
          700: "var(--info-700)",
          800: "var(--info-800)",
          900: "var(--info-900)"
        },
        notice: {
          DEFAULT: "var(--notice-500)",
          100: "var(--notice-100)",
          200: "var(--notice-200)",
          300: "var(--notice-300)",
          400: "var(--notice-400)",
          500: "var(--notice-500)",
          main: "var(--notice-500)",
          600: "var(--notice-600)",
          700: "var(--notice-700)",
          800: "var(--notice-800)",
          900: "var(--notice-900)"
        },
        success: {
          DEFAULT: "var(--success-500)",
          100: "var(--success-100)",
          200: "var(--success-200)",
          300: "var(--success-300)",
          400: "var(--success-400)",
          500: "var(--success-500)",
          main: "var(--success-500)",
          600: "var(--success-600)",
          700: "var(--success-700)",
          800: "var(--success-800)",
          900: "var(--success-900)"
        },
        warning: {
          DEFAULT: "var(--warning-500)",
          100: "var(--warning-100)",
          200: "var(--warning-200)",
          300: "var(--warning-300)",
          400: "var(--warning-400)",
          500: "var(--warning-500)",
          main: "var(--warning-500)",
          600: "var(--warning-600)",
          700: "var(--warning-700)",
          800: "var(--warning-800)",
          900: "var(--warning-900)"
        },
        danger: {
          DEFAULT: "var(--danger-500)",
          100: "var(--danger-100)",
          200: "var(--danger-200)",
          300: "var(--danger-300)",
          400: "var(--danger-400)",
          500: "var(--danger-500)",
          main: "var(--danger-500)",
          600: "var(--danger-600)",
          700: "var(--danger-700)",
          800: "var(--danger-800)",
          900: "var(--danger-900)"
        }
      }
    }
  },
  plugins: []
};
