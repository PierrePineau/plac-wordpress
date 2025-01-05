// vite.config.js
import { defineConfig } from "file:///C:/Users/power/Sites-Wordpress/plac/app/public/wp-content/themes/plac/node_modules/vite/dist/node/index.js";
import tailwindcss from "file:///C:/Users/power/Sites-Wordpress/plac/app/public/wp-content/themes/plac/node_modules/tailwindcss/lib/index.js";
import autoprefixer from "file:///C:/Users/power/Sites-Wordpress/plac/app/public/wp-content/themes/plac/node_modules/autoprefixer/lib/autoprefixer.js";
var vite_config_default = defineConfig({
  // On ajoute le plugin tailwindcss
  // plugins: [],
  // css: {
  //     postcss: {
  //         plugins: [
  //             tailwindcss(),
  //             autoprefixer()
  //         ],
  //     },
  // 	preprocessorOptions: {  
  // 		scss: {},
  // 	},
  // },
  build: {
    outDir: "./dist",
    assetdir: "./assets",
    // emptyOutDir: true,
    watch: true,
    minify: true,
    manifest: true,
    rollupOptions: {
      input: {
        "main": "./main.js"
        // 'app': "./app.js",
      },
      output: {}
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxwb3dlclxcXFxTaXRlcy1Xb3JkcHJlc3NcXFxccGxhY1xcXFxhcHBcXFxccHVibGljXFxcXHdwLWNvbnRlbnRcXFxcdGhlbWVzXFxcXHBsYWNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXFVzZXJzXFxcXHBvd2VyXFxcXFNpdGVzLVdvcmRwcmVzc1xcXFxwbGFjXFxcXGFwcFxcXFxwdWJsaWNcXFxcd3AtY29udGVudFxcXFx0aGVtZXNcXFxccGxhY1xcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzovVXNlcnMvcG93ZXIvU2l0ZXMtV29yZHByZXNzL3BsYWMvYXBwL3B1YmxpYy93cC1jb250ZW50L3RoZW1lcy9wbGFjL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHtkZWZpbmVDb25maWd9IGZyb20gXCJ2aXRlXCJcclxuaW1wb3J0IHRhaWx3aW5kY3NzIGZyb20gJ3RhaWx3aW5kY3NzJ1xyXG5pbXBvcnQgYXV0b3ByZWZpeGVyIGZyb20gJ2F1dG9wcmVmaXhlcidcclxuXHJcbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XHJcbiAgICAvLyBPbiBham91dGUgbGUgcGx1Z2luIHRhaWx3aW5kY3NzXHJcbiAgICAvLyBwbHVnaW5zOiBbXSxcclxuXHQvLyBjc3M6IHtcclxuICAgIC8vICAgICBwb3N0Y3NzOiB7XHJcbiAgICAvLyAgICAgICAgIHBsdWdpbnM6IFtcclxuICAgIC8vICAgICAgICAgICAgIHRhaWx3aW5kY3NzKCksXHJcbiAgICAvLyAgICAgICAgICAgICBhdXRvcHJlZml4ZXIoKVxyXG4gICAgLy8gICAgICAgICBdLFxyXG4gICAgLy8gICAgIH0sXHJcblx0Ly8gXHRwcmVwcm9jZXNzb3JPcHRpb25zOiB7ICBcclxuXHQvLyBcdFx0c2Nzczoge30sXHJcblx0Ly8gXHR9LFxyXG5cdC8vIH0sXHJcblx0YnVpbGQ6IHtcclxuICAgICAgICBvdXREaXI6IFwiLi9kaXN0XCIsXHJcbiAgICAgICAgYXNzZXRkaXI6IFwiLi9hc3NldHNcIixcclxuICAgICAgICAvLyBlbXB0eU91dERpcjogdHJ1ZSxcclxuICAgICAgICB3YXRjaDogdHJ1ZSxcclxuICAgICAgICBtaW5pZnk6IHRydWUsXHJcbiAgICAgICAgbWFuaWZlc3Q6IHRydWUsXHJcblx0XHRyb2xsdXBPcHRpb25zOiB7XHJcblx0XHRcdGlucHV0OiB7XHJcbiAgICAgICAgICAgICAgICAnbWFpbic6IFwiLi9tYWluLmpzXCIsXHJcbiAgICAgICAgICAgICAgICAvLyAnYXBwJzogXCIuL2FwcC5qc1wiLFxyXG4gICAgICAgICAgICB9LFxyXG5cdFx0XHRvdXRwdXQ6IHtcclxuICAgICAgICAgICAgfVxyXG5cdFx0fSxcclxuXHR9LFxyXG59KVxyXG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQXFaLFNBQVEsb0JBQW1CO0FBQ2hiLE9BQU8saUJBQWlCO0FBQ3hCLE9BQU8sa0JBQWtCO0FBRXpCLElBQU8sc0JBQVEsYUFBYTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUEsRUFjM0IsT0FBTztBQUFBLElBQ0EsUUFBUTtBQUFBLElBQ1IsVUFBVTtBQUFBO0FBQUEsSUFFVixPQUFPO0FBQUEsSUFDUCxRQUFRO0FBQUEsSUFDUixVQUFVO0FBQUEsSUFDaEIsZUFBZTtBQUFBLE1BQ2QsT0FBTztBQUFBLFFBQ00sUUFBUTtBQUFBO0FBQUEsTUFFWjtBQUFBLE1BQ1QsUUFBUSxDQUNDO0FBQUEsSUFDVjtBQUFBLEVBQ0Q7QUFDRCxDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
