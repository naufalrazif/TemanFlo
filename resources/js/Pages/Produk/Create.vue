<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
    <Link href="/produk" class="text-sm text-gray-600 mb-4 inline-block"> Kembali</Link>

    <form @submit.prevent="submit" class="max-w-md mt-4">
      <div class="mb-3">
        <label>Jenis Buket</label>
        <input v-model="form.jenis_buket" class="w-full border p-2" />
        <div v-if="form.errors.jenis_buket" class="text-red-600 text-sm">{{ form.errors.jenis_buket }}</div>
      </div>

      <div class="mb-3">
        <label>Tema</label>
        <input v-model="form.tema" class="w-full border p-2" />
        <div v-if="form.errors.tema" class="text-red-600 text-sm">{{ form.errors.tema }}</div>
      </div>

      <div class="mb-3">
        <label>Size</label>
        <input v-model="form.size" class="w-full border p-2" />
        <div v-if="form.errors.size" class="text-red-600 text-sm">{{ form.errors.size }}</div>
      </div>

      <div class="mb-3">
        <label>Deskripsi</label>
        <textarea v-model="form.deskripsi" class="w-full border p-2"></textarea>
        <div v-if="form.errors.deskripsi" class="text-red-600 text-sm">{{ form.errors.deskripsi }}</div>
      </div>

      <div class="mb-3">
        <label>Harga</label>
        <input type="number" v-model="form.harga" class="w-full border p-2" />
        <div v-if="form.errors.harga" class="text-red-600 text-sm">{{ form.errors.harga }}</div>
      </div>

      <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded">Simpan</button>
    </form>
  </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3'

const form = useForm({
  jenis_buket: '',
  tema: '',
  size: '',
  deskripsi: '',
  harga: ''
})

function submit() {
  form.post('/produk')
}
</script>
