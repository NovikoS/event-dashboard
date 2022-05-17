<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="desserts"
            :items-per-page="5"
        >
            <template v-slot:item.fat="{ item }">
                <v-textarea
                    no-resize
                    solo
                    rows="3"
                >
                    {{ item.fat }}
                </v-textarea>
            </template>
        </v-data-table>
    </div>
</template>

<script>
export default {
    name: "DataTable",
    data() {
        return {
            headers: [
                {
                    text: 'Event',
                    align: 'start',
                    sortable: false,
                    value: 'name',
                },
                {text: 'Job ID', value: 'jobId'},
                {text: 'Status', value: 'fat'},
                {text: 'Data', value: 'carbs'},
                {text: 'Errors', value: 'protein'},
            ],
            desserts: [
                {
                    name: 'TestEvent',
                    jobId: 'qwrqwbweo3o4012gewivomewopi50qwr',
                    fat: 235235235,
                    carbs: 24,
                    protein: 4.0,
                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
