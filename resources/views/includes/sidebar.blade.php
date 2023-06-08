<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="{{ route('dashboard') }}"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                
                <li class="">
                    <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-shopping-cart"></i>Produk</a>
                </li>

                <li class="">
                    <a href="{{ route('product-galleries.index') }}"> <i class="menu-icon fa fa-picture-o"></i>Galeri Produk</a>
                </li>
  
                <li class="">
                    <a href="{{ route('transactions.index') }}"> <i class="menu-icon fa fa-money"></i>Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </aside>
  <!-- /#left-panel -->