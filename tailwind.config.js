/** @type {import('tailwindcss').Config} */


module.exports = {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
    ],
    theme: {
      extend: {
        colors: {
          yellow: "#FDC55E",
          black: "#101010",
          green: "#29CB6A",
          red: "#F54748",
          // Tambahkan definisi warna "warning" di sini
          warning: {
            50: "#FFF9E6",
            100: "#FFEEBA",
            200: "#FFE38E",
            300: "#FFD78F",
            400: "#FFCE35",
            500: "#EAB308",
            600: "#C19200",
            700: "#987300",
            800: "#705400",
            900: "#473600",
          },
          // Tambahkan definisi warna "danger" di sini
          danger: {
            50: "#FFEDED",
            100: "#FFC4C4",
            200: "#FF9A9A",
            300: "#FE7171",
            400: "#EF4444",
            500: "#DC3545",
            600: "#AB2020",
            700: "#891313",
            800: "#670909",
            900: "#450303",
          },
          // Tambahkan definisi warna "info" di sini
          info: {
            50: "#EBF3FF",
            100: "#C0D8FF",
            200: "#94BDFF",
            300: "#69A2FF",
            400: "#3B82F6",
            500: "#2869D4",
            600: "#1853B2",
            700: "#0C3E90",
            800: "#042C6E",
            900: "#001D4C",
          },
          white: {
            50: "#F9F9F9",
            100: "#FCFCFC",
            200: "#F7F7F7",
            300: "#F0F0F0",
            400: "#E6E6E6",
            500: "#C5A8AA",
            600: "#C5A8AA",
            700: "#A5737C",
            800: "#854958",
            900: "#6E2C43",
        },
        'red': {
            100: "#FFEDED",
            200: "#FFC4C4",
            300: "#FF9B9C",
            400: "#FF8081",
            500: "#F54748",
            600: "#CC2F30",
            700: "#A31C1D",
            800: "#7B0E0F",
            900: "#520505",
        },
        'pink': {
            200: "#FEF2F2",
            300: "#E4D5D5",
            400: "#CBB9B9",
            500: "#B19E9E",
            600: "#988585",
            700: "#7F6C6C",
            800: "#655454",
            900: "#4C3D3D",
        },
        'grey': {
            100: "#F1F1F1",
            200: "#DDD9D9",
            300: "#C8C2C2",
            400: "#B4ABAB",
            500: "#9F9595",
            600: "#8B8080",
            700: "#776B6B",
            800: "#625757",
            900: "#4E4444",
        },
        'green': {
            200: "#ECFFF4",
            300: "#B5FFD2",
            400: "#7DFFB1",
            500: "#43F48A",
            600: "#29CB6A",
            700: "#15A24E",
            800: "#077935",
            900: "#005120",
        },
        'yellow': {
            200: "#FFF9EF",
            300: "#FFE8BF",
            400: "#FFD78F",
            500: "#FDC55E",
            600: "#D4A144",
            700: "#AB7F2E",
            800: "#835F1D",
            900: "#5A400F",
        },
        },
      },
        colors: {
         

            // ...
        },
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
        // ... other plugins
    ],
};
