<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ url('images/logobulat.PNG') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- link icon -->
        <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('dashboard')"/>
        @can('role','resepsionis')
        <x-nav-item label="Monitoring" icon="fas fa-desktop" :link="route('moni')"/>
        @endcan

        @can('role','admin')
        <x-nav-item label="Fasilitas Kamar" icon="fas fa-building" :link="route('fasilitas.index')"/>
        <x-nav-item label="Fasilitas Umum" icon="far fa-building" :link="route('kamar.index')"/>
        <x-nav-item label="Kamar" icon="fas fa-bed" :link="route('kamar.index')"/>
        <x-nav-item label="User Admin" icon="fas fa-users" :link="route('admin.index')"/>
        @endcan
        <!-- end link icon -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>