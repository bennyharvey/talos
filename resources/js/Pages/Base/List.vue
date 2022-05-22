<template>
    <el-scrollbar>
        <el-table :data="tableData">
            <el-table-column prop="date" label="Date" width="140" />
            <el-table-column prop="name" label="Name" width="120" />
            <el-table-column prop="address" label="Address" />
        </el-table>
    </el-scrollbar>
</template>
<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Shared/Layout'
import { ref } from 'vue'

const item = {
    date: '2016-05-02',
    name: 'Tom',
    address: 'No. 189, Grove St, Los Angeles',
}

export default {
    layout: Layout,
    components: {
        Head,
    },
    data() {
        return {
            tableData: ref(Array.from({ length: 40 }).fill(item))
        }
    },
}
</script>
