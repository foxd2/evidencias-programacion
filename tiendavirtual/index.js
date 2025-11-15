// ======================
//   DATOS DE JUEGOS GENERADOS
// ======================
const games = [];

// Juegos reales al inicio
games.unshift(

{
    id: 1001,
    title: "Warzone",
    category: "action",
    price: 899,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmTEuDav5NMzBG5Hvhf3qayO3fQObsFgjOyQ&s"
},
{
    id: 1002,
    title: "Resident Evil 4 Remake",
    category: "action",
    price: 1099,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXFcb_iV9UI8cnFEje9bOx-2N7fiCdYssCRg&s"
},
{
    id: 1003,
    title: "Iron Assault",
    category: "action",
    price: 749,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTam7ljA4KIKmdlFj0PU3U8d-cz8_otF5YYMA&s"
},
{
    id: 1004,
    title: "BattleCore X",
    category: "action",
    price: 1150,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzDEj7sG0IpOTqzGfVaAqzjJkdZdCXxLyC0A&s"
},
{
    id: 1005,
    title: "Dark Horizon",
    category: "action",
    price: 820,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfFfWl1dbiHBIFt7PYF6A6FtdSXrrsG6HlEw&s"
},
{
    id: 1006,
    title: "Urban Strikeforce",
    category: "action",
    price: 980,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmOq6bkf6tPjYKCYosPq5ZSSa395HKr1XMQw&s"
},
{
    id: 1007,
    title: "Last Vanguard",
    category: "action",
    price: 1099,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDWRH-eUs3oAN2PkmP2keUabxY6RiDQDBnjg&s"
},
{
    id: 1008,
    title: "Project Warborn",
    category: "action",
    price: 760,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK86X83qzhDK48Ro2x-KU3pVowscdbzSmIVA&s"
},
{
    id: 1009,
    title: "Nightfall Zero",
    category: "action",
    price: 1250,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5cOgqzlo0ItSvhAcO5SCOcAkNtQjvqaMm_w&s"
},
{
    id: 1010,
    title: "Steel Rebellion",
    category: "action",
    price: 899,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTEghDCu_fHgZS9tT3AglJLrXupp-d1XmgTg&s"
},
{
    id: 1011,
    title: "Crimson Raid",
    category: "action",
    price: 870,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBhLYZBitnytjaf7Th3wfi8ICCVzGudhEs9w&s"
},
{
    id: 1012,
    title: "Thunder Ops",
    category: "action",
    price: 940,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDEQl9Y7_sW4id9kvcp6dj8wr_xBbAwkcFvg&s"
},
{
    id: 1015,
    title: "Blackfire Unit",
    category: "action",
    price: 770,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7WUZdzQy8x-CuMs5O3hvXWR7W0YQuCLH6Yw&s"
},
{
    id: 1016,
    title: "Omega Strike",
    category: "action",
    price: 990,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStOMOtvi6iDMvE7vI8JFgrwF3-OoyJxLq87w&s"
},
{
    id: 1017,
    title: "Chaos Vector",
    category: "action",
    price: 860,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0BD7PPHBfFckkSd1S8V5hMEyZ9an8r4prxw&s"
},
{
    id: 1018,
    title: "Atomic Fury",
    category: "action",
    price: 1199,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7pZ38wSTNf-Ju3wUlxzNHsbXz0RJeAWxySA&s"
},

{
    id: 1020,
    title: "Bullet Phantom",
    category: "action",
    price: 810,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTubKoWt2Sb-hb4Iq0a2nBlu3jjlQU4J2iTmg&s"
},
{
    id: 1052,
    title: "Dark Souls III",
    category: "rpg",
    price: 799,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbUXF3tALoVTAcWd_60zKPxl7qc2a4AaqukA&s"
},
{
    id: 1057,
    title: "Skyrim Special Edition",
    category: "rpg",
    price: 749,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxzmg_BIiq75C8Qo8nNSmc7dmyVScITq-E5g&s"
},
{
    id: 1058,
    title: "Dragon's Dogma 2",
    category: "rpg",
    price: 1299,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTduF-IMekK9Xi0YG1m0jRBjqJodkzi46jNfw&s"
},
{
    id: 1059,
    title: "Monster Hunter World",
    category: "rpg",
    price: 899,
    img: "https://i.3djuegos.com/juegos/16611/monster_hunter_world_iceborne/fotos/ficha/monster_hunter_world_iceborne-5047501.webp"
},
{
    id: 1060,
    title: "Monster Hunter Rise",
    category: "rpg",
    price: 999,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF65sasO0jZXlJBMhZVuBDuFbjTc-C6HzqJQ&s"
},
{
    id: 1065,
    title: "Baldur's Gate 3",
    category: "rpg",
    price: 1299,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUpuWr5yWMbGkdNDzlaXLe8ZeJlcZfNupKow&s"
},
{
    id: 1066,
    title: "Kingdom Come: Deliverance",
    category: "rpg",
    price: 899,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0OWmktnK8_tqcpd0K7goQ3jmMJ0PbHxk_fw&s"
},
{
    id: 1067,
    title: "Code Vein",
    category: "rpg",
    price: 749,
    img: "https://upload.wikimedia.org/wikipedia/en/thumb/8/8c/Code_vein.png/250px-Code_vein.png"
},
{
    id: 1068,
    title: "Lies of P",
    category: "rpg",
    price: 1099,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYmFRqbHacWvx0uVAJpieum6UqhX6iv1wuAw&s"
},
{
    id: 1070,
    title: "The Outer Worlds",
    category: "rpg",
    price: 699,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-LqfkUhAvJcMYmTnD6frV7EBepj_q-YeSTw&s"
},

{
    id: 1091,
    title: "The Legend of Zelda: Breath of the Wild",
    category: "adventure",
    price: 899,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpdrAedpzYVWdAaIxRNoZsjKFP7seEdOtbww&s"
},
{
    id: 1095,
    title: "Stray",
    category: "adventure",
    price: 499,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQYgU5RFXC-vAq7dv9vKwbnVw2fE67gqInTQ&s"
},
{
    id: 1097,
    title: "It Takes Two",
    category: "adventure",
    price: 699,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeNL-poeYYotmCkFwcFThC6VeWrlmfV3SKtw&s"
},
{
    id: 1099,
    title: "Life is Strange",
    category: "adventure",
    price: 249,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9DaPpWeVsulNsA3LRMz7-NkT1BQywdlfANw&s"
},
{
    id: 1101,
    title: "Little Nightmares",
    category: "adventure",
    price: 299,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwil06DsxY44C9mFJOgRQF2qfu39qLq3DozA&s"
},
{
    id: 1102,
    title: "Little Nightmares II",
    category: "adventure",
    price: 499,
    img: "https://m.media-amazon.com/images/M/MV5BODUxZGFjNGUtNDMyOS00NGJiLTkyNGMtY2Q1NWRkNGE5NmI1XkEyXkFqcGc@._V1_QL75_UY281_CR15,0,190,281_.jpg"
},


{
    id: 1121,
    title: "FIFA 23",
    category: "sports",
    price: 999,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8BM66WP5WMzTLWD8MYj6afkn2hTiNmkd3tA&s"
},  
{
    id: 1123,
    title: "eFootball 2024",
    category: "sports",
    price: 0,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx8gbfqeWGW0YBcJaAi4teJBsYGlb6gmd4ew&s"
},
{
    id: 1125,
    title: "Forza Horizon 5",
    category: "sports",
    price: 1199,
    img: "https://media.vandal.net/t200/102235/forza-horizon-5-20217291353241_1.jpg"
},
{
    id: 1126,
    title: "Madden NFL 24",
    category: "sports",
    price: 1099,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPq9b2g0N-CmqH19qFz7_fvkOYOPPT3F7_hQ&s"
},
{
    id: 1127,
    title: "Rocket League",
    category: "sports",
    price: 0,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfDgCAO5rb1fm0XGiQr3rNzYS7b9QNbV61Zg&s"
},
{
    id: 1128,
    title: "WWE 2K24",
    category: "sports",
    price: 1050,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWJuzUyjsDgmupkaBXS5fuK3olAmGP5z1CNw&s"
},
{
    id: 1129,
    title: "Tony Hawk's Pro Skater 1+2",
    category: "sports",
    price: 899,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuFprZBmsk37PHFv-DBLrFa1w7S3mGDQs9hg&s"
},
{
    id: 1130,
    title: "Riders Republic",
    category: "sports",
    price: 799,
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmTtAJncGkhjUu5537GTpa3dz2bnW8elMJWQ&s"
},
);

// ======================
//   VARIABLES PRINCIPALES
// ======================
let loadIndex = 0;
const itemsPerLoad = 8; // Se ven mejor 8 por carga

const grid = document.getElementById("games-grid");
const searchInput = document.getElementById("search");
const filterCategory = document.getElementById("filter-category");
const loadMoreBtn = document.getElementById("load-more");
const cartCount = document.getElementById("cart-count");

let filteredGames = [...games];
let cart = JSON.parse(localStorage.getItem("cart")) || [];
cartCount.textContent = cart.length;

// ======================
//   FUNCIONES
// ======================

// Pintar tarjetas de juegos
function loadGames() {
    const end = loadIndex + itemsPerLoad;
    const gamesToShow = filteredGames.slice(loadIndex, end);

    gamesToShow.forEach(game => {
        const card = document.createElement("div");
        card.classList.add("game-card");

        card.innerHTML = `
            <img src="${game.img}" alt="${game.title}">
            <h3>${game.title}</h3>
            <p class="price">$${game.price}</p>
            <button class="btn add-cart" data-id="${game.id}">Agregar al carrito</button>
        `;

        grid.appendChild(card);
    });

    loadIndex = end;

    // Ocultar botón si ya no hay más juegos
    loadMoreBtn.style.display = loadIndex >= filteredGames.length ? "none" : "block";
}

// Filtros (search + categoría)
function applyFilters() {
    const searchText = searchInput.value.toLowerCase();
    const category = filterCategory.value;

    filteredGames = games.filter(game => {
        const matchCategory = category === "all" || game.category === category;
        const matchSearch = game.title.toLowerCase().includes(searchText);
        return matchCategory && matchSearch;
    });

    grid.innerHTML = "";
    loadIndex = 0;

    if (filteredGames.length === 0) {
        grid.innerHTML = "<p>No se encontraron juegos.</p>";
        loadMoreBtn.style.display = "none";
    } else {
        loadGames();
    }
}



// ======================
//   CATEGORÍAS DINÁMICAS
// ======================
const categoriesCount = {};

games.forEach(game => {
    categoriesCount[game.category] = (categoriesCount[game.category] || 0) + 1;
});

document.querySelectorAll(".category-card").forEach(card => {
    const cat = card.dataset.category;

    if (categoriesCount[cat] !== undefined) {
        card.querySelector("small").textContent = `${categoriesCount[cat]} juegos`;
    }

    card.addEventListener("click", () => {
        filteredGames = cat === "all" ? [...games] : games.filter(g => g.category === cat);
        filterCategory.value = cat;
        searchInput.value = "";

        grid.innerHTML = "";
        loadIndex = 0;
        loadGames();
    });
});

// ======================
//   EVENTOS
// ======================
loadMoreBtn.addEventListener("click", loadGames);
searchInput.addEventListener("input", applyFilters);
filterCategory.addEventListener("change", applyFilters);

document.addEventListener("click", e => {
    if (e.target.classList.contains("add-cart")) {
        addToCart(parseInt(e.target.dataset.id));
    }
});

// ======================
//   MODO OSCURO
// ======================
document.getElementById("theme-toggle").addEventListener("click", () => {
    document.body.classList.toggle("dark");
});

// ======================
//   INICIALIZACIÓN
// ======================
applyFilters();
