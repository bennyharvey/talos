<script setup>
import BaseButton from '../../Shared/Basic/BaseButton'
import { reactive, ref } from 'vue'

defineProps({
    baseStations: Array
})

const dialogTableVisible = ref(false)
const dialogFormVisible = ref(false)
const formLabelWidth = '140px'
const form = reactive({
    name: '',
    region: '',
    date1: '',
    date2: '',
    delivery: false,
    type: [],
    resource: '',
    desc: '',
})

function submit() {
    console.log('click')
    dialogFormVisible.value = false
}
</script>

<template>
    <BaseButton text="Create new" @click="dialogFormVisible = true"/>
    <!--<el-button text @click="dialogFormVisible = true">open a Form nested Dialog</el-button>-->
    <el-scrollbar>
        <el-table :data="baseStations">
            <el-table-column prop="id" label="Id" width="140" />
            <el-table-column prop="name" label="Name" width="120" />
        </el-table>
    </el-scrollbar>
    <!--<p>{{baseStations[0].name}}</p>-->

    <!-- Form -->


    <el-dialog v-model="dialogFormVisible" title="Shipping address">
        <el-form :model="form">
            <el-form-item label="Promotion name" :label-width="formLabelWidth">
                <el-input v-model="form.name" autocomplete="off" />
            </el-form-item>
            <el-form-item label="Zones" :label-width="formLabelWidth">
                <el-select v-model="form.region" placeholder="Please select a zone">
                    <el-option label="Zone No.1" value="shanghai" />
                    <el-option label="Zone No.2" value="beijing" />
                </el-select>
            </el-form-item>
        </el-form>
        <template #footer>
            <span class="dialog-footer">
                <BaseButton text="Cancel"  @click="dialogFormVisible = false" type="basic"/>
                <BaseButton text="Confirm"  @click="submit"/>
            </span>
        </template>
    </el-dialog>


</template>
