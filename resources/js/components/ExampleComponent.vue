<template>
    <div>
        <v-app-bar
            color="red"
            rounded
        >
            <v-app-bar-nav-icon></v-app-bar-nav-icon>

            <v-toolbar-title>Title</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
            </v-btn>

            <v-btn icon>
                <v-icon>mdi-heart</v-icon>
            </v-btn>

            <v-btn icon>
                <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>
        </v-app-bar>
        <data-table height="100%"></data-table>
    </div>
</template>

<script>

import DataTable from "./DataTable/DataTable";

export default {
    components: {DataTable},
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
