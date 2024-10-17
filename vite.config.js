import {defineConfig} from "vite"
import tailwindcss from 'tailwindcss'
import autoprefixer from 'autoprefixer'

export default defineConfig({
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
                'main': "./main.js",
                // 'app': "./app.js",
            },
			output: {
            }
		},
	},
})
