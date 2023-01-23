asd
<template>
    <el-container class="input-size-default">
        <el-input v-model="input" placeholder="Please input" clearable />
    </el-container>
    <p>Base Station #{{ baseStation }}</p>
    <Button @click="increment" :text="`Count: ${count}`"/>
    <el-row class="mb-4">
        <Button text="sdf"/>
    </el-row>
    <Link :href="$route('bs.info', baseStation - 1)">Previous  base station</Link>
    <Link :href="$route('bs.info', baseStation + 1)">Next base station</Link>
</template>

<style>
.input-size-default{
    width: 300px;
}
</style>
