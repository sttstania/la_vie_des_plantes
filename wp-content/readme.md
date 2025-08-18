# 🌿 La vie des plantes – Site WordPress

Projet réalisé dans le cadre d'un devoir de création de site vitrine et e-commerce sous WordPress.

Ce dépôt contient :
- Le dossier `wp-content` avec les thèmes, plugins et médias
- Le fichier `la-vie-des-plantes.sql` contenant la base de données du site
- Ce fichier `readme.md` avec les instructions d'installation

---

## 🛠️ Installation locale (via LocalWP)

1. Crée un nouveau site vide dans [LocalWP](https://localwp.com) appelé `la-vie-des-plantes`
2. Remplace le dossier `wp-content` du site par celui de ce dépôt
   - 📁 `local-sites/la-vie-des-plantes/app/public/wp-content`
3. Ouvre **Adminer** depuis Local > onglet **Database** > bouton **Open Adminer EVO**
4. Supprime les tables existantes (si nécessaire) et **importe** le fichier `la-vie-des-plantes.sql`
5. Vérifie que l'URL dans la base de données est bien `http://la-vie-des-plantes.local`
   - Dans la table `wp_options`, modifie `siteurl` et `home` si besoin
6. Accède à ton site dans le navigateur et connecte-toi avec les identifiants ci-dessus

---

## 📦 Plugins utilisés

- Elementor (version gratuite)
- WooCommerce
- ShopLentor (WooLentor Lite)
- Recent Posts Widget With Thumbnails
- custom-fonts
- contact-form-7
- elementor
- header-footer-elementor
- skt-templates

---

## 🎨 Thème utilisé

- Flower Shop Lite (personnalisé)

---

## 📸 Fonctionnalités du site

- Page d’accueil avec présentation, produits et CTA vers la boutique
- Page boutique avec trois produits bio personnalisés
- Pages « À propos » et « Contact »
- Header/footer réutilisables
- Intégration d’un design respectant la charte graphique
- Produits WooCommerce avec image, prix, description, catégorie

---



