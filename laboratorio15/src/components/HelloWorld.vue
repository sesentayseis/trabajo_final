<template>
    <v-app id="inspire">
        <v-main>
            <v-container>
                <v-row>
                    <v-col
                        v-for="n in 10"
                        :key="n"
                        cols="4"
                    >
                        <v-card height="200"></v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    //
}
</script>
