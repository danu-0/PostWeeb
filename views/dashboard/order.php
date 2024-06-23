<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnjayPOS | Order</title>
    <link rel="stylesheet" href="../../css/global.css" />
    <link rel="stylesheet" href="../../css/order.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="Body">
      <div class="SideBar">
        <div>
          <h1>AnjayPOS.</h1>
          <hr />
          <div class="Menu">
            <ul>
              <li>
                <a href="./index.php">
                  <div class="menuButton">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      fill="currentColor"
                      class="bi bi-house"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"
                      />
                    </svg>
                    <p>Dashboard</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="../product/index.php">
                  <div class="menuButton">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-box-seam"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"
                      />
                    </svg>
                    <p>Product</p>
                  </div>
                </a>
              </li>
              <li>
                <a>
                  <div class="menuButton">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-journal"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"
                      />
                      <path
                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"
                      />
                    </svg>
                    <p>Transactions</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="menuButton">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-gear"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"
                      />
                      <path
                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"
                      />
                    </svg>
                    <p>Settings</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="../auth/login.php">
                  <div class="menuButton">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-door-open"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"
                      />
                      <path
                        d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"
                      />
                    </svg>
                    <p>Logout</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="Profile">
          <i class="fa-solid fa-user"></i>
          <p>Udien Samsudien</p>
          <button>SetUp Profile</button>
        </div>
      </div>
      <div class="Hero">
        <div class="label-top">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-calendar"
            viewBox="0 0 16 16"
          >
            <path
              d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"
            />
          </svg>
          <h5>Jumat, 12 Agustus 2024</h5>
        </div>
        <div class="table-container">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Makanan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nasi Goreng</td>
                <td>2</td>
                <td>15.000</td>
                <td>30.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Es Teh</td>
                <td>3</td>
                <td>5.000</td>
                <td>15.000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Udang Goreng</td>
                <td>2</td>
                <td>8.000</td>
                <td>16.000</td>
              </tr>
              <tr class="total">
                <th scope="row" class="text-white">#</th>
                <td colspan="3" class="fw-bold text-white">Total</td>
                <td class="fw-bold text-white">61.000</td>
              </tr>
            </tbody>
          </table>
          <div class="table-bottom">
            <div class="text-bottom">
              <h3>Total Pembayaran : Rp 61.000</h3>
            </div>
            <div class="options-bottom">
              <a href="./index.php" class="cbtn">
                <div class="cbtn-danger">Batalkan</div>
              </a>
              <div class="cbtn-primary">Konfirmasi</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
