const fs = require("fs");
const path = require("path");
const fantasticon = require("fantasticon");

// Résolution correcte des chemins sous Windows
const inputDir = path.resolve(__dirname, "assets/svg");
const outputDir = path.resolve(__dirname, "assets/icons");

// Vérifier que le dossier SVG existe et contient des fichiers
if (!fs.existsSync(inputDir) || fs.readdirSync(inputDir).length === 0) {
  console.error("Le dossier assets/svg est vide ou n'existe pas");
  process.exit(1);
}

// Configuration de Fantasticon
const config = {
  inputDir: inputDir,
  outputDir: outputDir,
  fontTypes: ["ttf", "woff", "woff2"],
  assetTypes: ["css"],
  name: "icon",
  prefix: "icon",
  selector: ".icon",
  fontsUrl: "./assets/icons",
  pathOptions: {
    css: path.resolve(__dirname, "assets/styles/icon.css"),
  },
};

// Exécuter Fantasticon pour générer les icônes
fantasticon
  .generateFonts(config)
  .then(() => {
    console.log("Police d'icônes générée avec succès");
  })
  .catch((error) => {
    console.error("Erreur lors de la génération des icônes:", error);
  });
