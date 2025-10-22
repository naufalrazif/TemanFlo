<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

    <!-- Tombol menuju halaman create -->
    <Link
      href="/produk/create"
      class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
    >
      + Tambah Produk
    </Link>

    <!-- Daftar produk -->
    <ul>
      <li v-for="produk in produks" :key="produk.id" class="mb-2">
        {{ produk.jenis_buket }} - Rp{{ produk.harga }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { usePage, Link } from '@inertiajs/vue3'

const page = usePage()
const produks = page.props.produks || []
</script>