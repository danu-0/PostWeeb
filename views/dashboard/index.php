<?php
include '../../class/database.php';
include '../../class/product.php'; 

session_start();

if (!isset($_SESSION['nama'])) {
  header("Location: ../auth/index.php");
  exit();
}

$db        = new Database();
$conn      = $db->getConnection();
$products  = new Product($conn);

$category = isset($_GET['category']) ? $_GET['category'] : null;
if ($category) {
  $data_products = $products->getAll($category);
} else {
  $data_products = $products->getAll();
}
$half = ceil(count($data_products) / 2);
$parttop = array_slice($data_products, 0, $half);
$partbot = array_slice($data_products, $half);
$namaPengguna = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AnjayPOS | Dashboard</title>
  <link rel="stylesheet" href="../../css/global.css" />
  <link rel="stylesheet" href="../../css/dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<a href="../auth/index.php"></a>
<body>
  <div class="Body">
    <div class="SideBar">
      <div>
        <h1>AnjayPOS.</h1>
        <hr />
        <div class="Menu">
          <ul>
            <li>
              <a href="" class="active">
                <div class="menuButton">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                  </svg>
                  <p>Dashboard</p>
                </div>
              </a>
            </li>
            <li>
              <a href="../product/index.php">
                <div class="menuButton">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                  </svg>
                  <p>Product</p>
                </div>
              </a>
            </li>
            <li>
              <a href="../transaction/index.php">
                <div class="menuButton">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                  </svg>
                  <p>Transactions</p>
                </div>
              </a>
            </li>
            <li>
              <a href="">
                <div class="menuButton">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                  </svg>
                  <p>Settings</p>
                </div>
              </a>
            </li>
            <li>
              <a href="../../database/auth/logout.php">
                <div class="menuButton">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                    <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                  </svg>
                  <p>Logout</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div 
      class="Profile">
        <i class="fa-solid fa-user"></i>
        <p><?php echo $namaPengguna; ?></p>
        <button>SetUp Profile</button>
      </div>
    </div>
    <div class="Hero card-container-main">
      <div class="Top">
        <div class="list_kategori">
          <a href="index.php">
            <button type="submit" class="List_k <?php echo (is_null($category)) ? 'active' : ''; ?>">Semua</button>
          </a>
          <a href="index.php?category=makanan">
            <button type="submit" class="List_k <?php echo ($category == 'makanan') ? 'active' : ''; ?>">Makanan</button>
          </a>
          <a href="index.php?category=minuman">
            <button type="submit" class="List_k <?php echo ($category == 'minuman') ? 'active' : ''; ?>">Minuman</button>
          </a>
          <a href="index.php?category=snack">
            <button type="submit" class="List_k <?php echo ($category == 'snack') ? 'active' : ''; ?>">Snack</button>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card_row">
          <?php foreach ($parttop as $key => $value) : ?>
            <div class="card_product" id="<?php echo $key + 1 ?>">
              <div class="pict">
                <img src="../<?php echo $value['image'] ?>" alt="<?php echo $value['nama'] ?>">
              </div>
              <p><?php echo $value['nama'] ?></p>
              <div class="sub">
                <p>0</p>
                <p>Rp. <?php echo number_format($value['harga'], 0, ',', '.') ?></p>
                
              </div>
              <div class="subb">
                <div class="btn-min danger" data-product-id="<?php echo $value['id_produk']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
              </svg>
                </div>
                <div class="btn-add primary" data-product-id="<?php echo $value['id_produk']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                  </svg>
                </div>
                </div>
            </div>
          <?php endforeach ?>
        </div>
        <div class="card_row">
          <?php foreach ($partbot as $key => $value) : ?>
            <div class="card_product" key="<?php echo $key + 1 ?>">
              <div class="pict">
                <img src="../<?php echo $value['image'] ?>" alt="<?php echo $value['nama'] ?>">
              </div>
              <p><?php echo $value['nama'] ?></p>
              <div class="sub">
               <p>0</p>
                <p>Rp. <?php echo number_format($value['harga'], 0, ',', '.') ?></p>
                
              </div>
              <div class="subb">
                <div class="btn-min danger" data-product-id="<?php echo $value['id_produk']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
              </svg>
                </div>
                <div class="btn-add primary" data-product-id="<?php echo $value['id_produk']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                  </svg>
                </div>
                </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="bar_info">
        <div class="qtt">
          <p>Jumlah Pesan</p>
          <p class="info" id="jumlahPesan">0</p>
        </div>
        <div class="total_price">
          <p>Total Harga</p>
          <p class="info" id="totalHarga">Rp 0</p>
        </div>
        <a href="./order.php" class="btn-pembayaran">Pembayaran</a>
      </div>
    </div>
  </div>
  <a href="../../js/add_to_cart.php"></a>
  <script src="../../js/script.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
  const addButton = document.querySelectorAll('.btn-add');

  addButton.forEach(button => {
    button.addEventListener('click', function() {
      const productId = button.dataset.productId;
      addToCart(productId);
    });
  });

  function addToCart(productId) {
  console.log('Mengirim permintaan untuk menambahkan produk dengan ID:', productId); // Log untuk memeriksa ID produk yang dikirim
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '../../js/add_to_cart.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log('Respons dari server:', xhr.responseText); // Log respons dari server
        console.log('Produk berhasil ditambahkan ke keranjang');
        updateCartUI(); // Perbarui tampilan setelah berhasil menambahkan produk
      } else {
        console.error('Gagal menambahkan produk ke keranjang. Status:', xhr.status);
      }
    }
  };
  xhr.send(`product_id=${productId}`);
}


  function updateCartUI() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '../../js/get_cart_info.php', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          const response = JSON.parse(xhr.responseText);
          const jumlahPesanElement = document.getElementById('jumlahPesan');
          const totalHargaElement = document.getElementById('totalHarga');

          jumlahPesanElement.textContent = response.totalItems;
          totalHargaElement.textContent = `Rp ${response.totalPrice}`;
        } else {
          console.error('Gagal memperbarui tampilan keranjang');
        }
      }
    };
    xhr.send();
  }

  // Panggil updateCartUI untuk menginisialisasi tampilan awal
  updateCartUI();
});

</script>

</body>

</html>

