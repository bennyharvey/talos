<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import { Menu as IconMenu, Message, Setting } from '@element-plus/icons-vue'
import { useDark, useToggle } from '@vueuse/core'
import {onMounted, ref} from "vue";

const isDark = ref(useDark())
const darkMode = ref()

function toggleDark() {
    isDark.value = !(isDark.value)
    darkMode.value = isDark.value ? "bedtime" : "wb_sunny"
}

onMounted(() => {
    darkMode.value = isDark.value ? "bedtime" : "wb_sunny"
})
</script>

<template>
    <el-container class="talos-layout" style="height: 100vh">
        <el-header style="text-align: right; font-size: 12px; background-color: var(--el-color-info-light-5)">
            <div class="toolbar">
                <!--<button @click="toggleDark">-->
                <!--    Is Dark: {{ isDark }}-->
                <!--</button>-->
                <it-toggle
                    icons
                    round
                    v-model="darkMode"
                    :options="['wb_sunny', 'bedtime']"
                    @click = "toggleDark"
                />
                <el-dropdown>
                    <el-icon style="margin-right: 8px; margin-top: 1px"><setting/></el-icon>
                    <template #dropdown>
                        <el-dropdown-menu>
                            <el-dropdown-item>View</el-dropdown-item>
                            <el-dropdown-item>Add</el-dropdown-item>
                            <el-dropdown-item>Delete</el-dropdown-item>
                        </el-dropdown-menu>
                    </template>
                </el-dropdown>
                <span>Admin</span>
            </div>
        </el-header>
        <el-container>
            <el-menu
                default-active="4"
                class="tl-menu-vertical"
                :collapse="true"
            >
                <Link :href="$route('bs.info', 1)">
                    <el-menu-item index="2">
                        <el-icon><icon-menu /></el-icon>
                        <template #title>BS Info</template>
                    </el-menu-item>
                </Link>
                <Link :href="$route('bs.list')">
                    <el-menu-item index="4">
                        <el-icon><setting /></el-icon>
                        <template #title>BS List</template>
                    </el-menu-item>
                </Link>
            </el-menu>
            <el-aside width="250px">
                <!--<el-scrollbar>-->
                    <el-menu>
                        <el-sub-menu index="1">
                            <template #title>
                                <el-icon><message /></el-icon>Navigator One
                            </template>
                            <el-menu-item-group>
                                <template #title>Group 1</template>
                                <el-menu-item index="1-1">Option 1</el-menu-item>
                                <el-menu-item index="1-2">Option 2</el-menu-item>
                            </el-menu-item-group>
                            <el-menu-item-group title="Group 2">
                                <el-menu-item index="1-3">Option 3</el-menu-item>
                            </el-menu-item-group>
                            <el-sub-menu index="1-4">
                                <template #title>Option4</template>
                                <el-menu-item index="1-4-1">Option 4-1</el-menu-item>
                            </el-sub-menu>
                        </el-sub-menu>
                        <el-sub-menu index="2">
                            <template #title>
                                <el-icon><icon-menu /></el-icon>Navigator Two
                            </template>
                            <el-menu-item-group>
                                <template #title>Group 1</template>
                                <el-menu-item index="2-1">Option 1</el-menu-item>
                                <el-menu-item index="2-2">Option 2</el-menu-item>
                            </el-menu-item-group>
                            <el-menu-item-group title="Group 2">
                                <el-menu-item index="2-3">Option 3</el-menu-item>
                            </el-menu-item-group>
                            <el-sub-menu index="2-4">
                                <template #title>Option 4</template>
                                <el-menu-item index="2-4-1">Option 4-1</el-menu-item>
                            </el-sub-menu>
                        </el-sub-menu>
                        <el-sub-menu index="3">
                            <template #title>
                                <el-icon><setting /></el-icon>Navigator Three
                            </template>
                            <el-menu-item-group>
                                <template #title>Group 1</template>
                                <el-menu-item index="3-1">Option 1</el-menu-item>
                                <el-menu-item index="3-2">Option 2</el-menu-item>
                            </el-menu-item-group>
                            <el-menu-item-group title="Group 2">
                                <el-menu-item index="3-3">Option 3</el-menu-item>
                            </el-menu-item-group>
                            <el-sub-menu index="3-4">
                                <template #title>Option 4</template>
                                <el-menu-item index="3-4-1">Option 4-1</el-menu-item>
                            </el-sub-menu>
                        </el-sub-menu>
                    </el-menu>
                <!--</el-scrollbar>-->
            </el-aside>
            <el-main style="margin: 10px">
                <slot />
            </el-main>
        </el-container>
        <!--<el-footer>-->
        <!--    footer-->
        <!--</el-footer>-->
    </el-container>
</template>

<style>
body {
    margin: 0;
}
</style>
<style scoped>

.talos-layout .el-header {
    position: relative;
    background-color: var(--el-bg-color);
    color: var(--el-text-color-primary);
}
.talos-layout .el-aside {
    color: var(--el-text-color-primary);
    height: 100%;
    /*background: var(--el-color-primary-light-8);*/
}
.talos-layout .el-menu {
    /*border-right: none;*/
    min-height: 100%;
}
.talos-layout .el-main {
    padding: 0;
}
.talos-layout .toolbar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    right: 20px;
}
.tl-menu-vertical {
    /*border-right: solid 1px var(--el-menu-border-color);*/
}
</style>
