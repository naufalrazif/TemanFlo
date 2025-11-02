<script setup lang="ts">
import { ref } from 'vue';

import Button from "@/components/ui/button/Button.vue";

import Create from './Create.vue';
import { Dialog ,DialogTrigger ,DialogContent } from '@/components/ui/dialog';

const props = defineProps({
  produks: Array
})



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