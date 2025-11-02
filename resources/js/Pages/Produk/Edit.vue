<script setup lang="ts">
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Textarea } from "@/components/ui/textarea";
import { Button } from "@/components/ui/button";
import { Select, SelectTrigger, SelectValue, SelectContent, SelectItem } from "@/components/ui/select";

const form = ref({
  nama: "",
  jenis_buket: "",
  tema: "",
  harga: "",
  deskripsi: "",
  foto: "",
});

const submit = () => {
  const data = new FormData();
  Object.entries(form.value).forEach(([key, value]) => {
    if (value) data.append(key, value as any);
  });
  Inertia.post("/produk", data);
};
</script>

<template>
  <div class="bg-[#f3cbb7] p-6 rounded-xl space-y-4">
    <h2 class="text-lg font-semibold">Tambah Produk</h2>

    <div class="flex items-center gap-4">
      <Label for="nama" class="w-1/3 text-right">Nama</Label>
      <Input id="nama" v-model="form.nama"  class="flex-1 bg-white" />
    </div>

    <div class="flex items-center gap-4">
      <Label for="category" class="w-1/3 text-right">Kategori</Label>
      <Select v-model="form.jenis_buket">
        <SelectTrigger class="flex-1 bg-white">
          <SelectValue />
        </SelectTrigger>
        <SelectContent>
          <SelectItem value="buket_bunga">Buket Bunga</SelectItem>
          <SelectItem value="buket_snack">Buket Snack</SelectItem>
          <SelectItem value="buket_boneka">Buket Boneka</SelectItem>
          <SelectItem value="buket_uang">Buket Uang</SelectItem>
        </SelectContent>
      </Select>
    </div>

    <div class="flex items-center gap-4">
      <Label for="category" class="w-1/3 text-right">Tema</Label>
      <Select v-model="form.tema">
        <SelectTrigger class="flex-1 bg-white">
          <SelectValue />
        </SelectTrigger>
        <SelectContent>
          <SelectItem value="birthday">Birthday</SelectItem>
          <SelectItem value="graduation">Graduation</SelectItem>
          <SelectItem value="wedding">Wedding</SelectItem>
        </SelectContent>
      </Select>
    </div>

    <div class="flex items-center gap-4">
      <Label for="nama" class="w-1/3 text-right">Harga</Label>
      <Input id="nama" type="number" v-model="form.harga" class="flex-1 bg-white" />
    </div>

    <div  class="flex items-center gap-4">
      <Label for="deskripsi" class="w-1/3 text-right">Deskripsi</Label>
      <Textarea id="deskripsi" v-model="form.deskripsi"  class="flex-1 bg-white"  />
    </div>

    <div class="flex items-center gap-4">
      <Label for="foto" class="w-1/3 text-right">Foto</Label>
      <Input 
        id="foto" 
        type="file" 
        class="flex-1 bg-white" 
        accept="image/*" 
        @change="e => form.foto = e.target.files[0]"
      />
    </div>

    <div class="flex justify-end">
      <Button class="bg-[#5c7b66] hover:bg-[#4e6958] text-white" @click="submit">
        Submit
      </Button>
    </div>
  </div>
</template>
