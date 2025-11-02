<script setup lang="ts">
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import Button from "@/components/ui/button/Button.vue";
import Edit from "./Edit.vue";
import Create from './Create.vue';
import { Dialog ,DialogTrigger ,DialogContent } from '@/components/ui/dialog';

const props = defineProps({
  produks: Array
})

const hapusProduk = (id: number) => {
  if (confirm('Apakah kamu yakin ingin menghapus produk ini?')) {
    Inertia.delete(`/produk/${id}`);
  }
};

const editProduk = (id: number) => {
  Inertia.get(`/produk/${id}/edit`);
};

</script>

<template>

Tambah Produk
<Dialog>
  <DialogTrigger>
    <Button>Tambah Produk</Button>
  </DialogTrigger>
  <DialogContent class="bg-[#f3cbb7] p-6 rounded-xl border-none">
    <Create />
  </DialogContent>
  
    
</Dialog>
    


  
</template>