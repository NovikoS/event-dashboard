<template>
  <div>
    <v-app-bar
      color="red"
    >
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Title</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
      </v-btn>
    </v-app-bar>

    <!--LIST-->
    <div>
      <v-expansion-panels accordion>
        <v-expansion-panel
          v-for="(job,i) in jobs"
          :key="i"
        >
          <v-expansion-panel-header>{{ job.name }}</v-expansion-panel-header>
          <v-expansion-panel-content>
            <!--TABLE-->
            <v-data-table
              dense
              :items="job.flow"
              item-key="status"
              :headers="headers"
              class="elevation-1"
            >
              <template v-slot:item.data="{ item }">
                <v-textarea
                  :value="JSON.stringify(item.data)"
                >
                </v-textarea>
              </template>

              <template v-slot:item.errors="{ item }">
                <v-textarea
                  :value="JSON.stringify(item.errors)"
                >
                  {{ item.errors }}
                </v-textarea>
              </template>


            </v-data-table>
            <!--            -->
          </v-expansion-panel-content>
        </v-expansion-panel>
      </v-expansion-panels>
    </div>
    <!--    -->

  </div>
</template>

<script>

export default {
  mounted() {
    console.log('Component mounted.')
  },
  data: () => ({
    items: [
      {
        icon: 'mdi-inbox',
        text: 'Inbox',
      },
      {
        icon: 'mdi-star',
        text: 'Star',
      },
      {
        icon: 'mdi-send',
        text: 'Send',
      },
      {
        icon: 'mdi-email-open',
        text: 'Drafts',
      },
    ],
    model: 1,
    jobs: [
      {
        name: 'qwtqwtweryrtu5e-by54wyb7y5-67567n56 7',
        flow: [
          {
            status: 'processing',
            errors: null,
            data: {
              contact:
                {
                  channels:
                    [{
                      type: "email",
                      value: "v.novikov@napopravku.ru"
                    }],
                  address: {
                    town: "spb"
                  },
                  id: 1287970279,
                  contactKey: 442846
                },
              groups: [175942367],
              formType: "homepageEmailSubscriptionForm"
            }
          },

          {
            status: 'failed',
            errors: {
              message: 'УПАЛО ПОТОМУ ЧТО'
            },
            data: '',
          }
        ],
      },
      {
        name: 'qwtqwtweryrtu5e-by54wyb7y5-67567n56 7',
        flow: [
          {
            status: 'processing',
            errors: null,
            data: {
              userId: 442846
            },
          },

          {
            status: 'failed',
            errors: {
              message: 'УПАЛО ПОТОМУ ЧТО'
            },
            data: {
              userId: 442846
            },
          }
        ],
      },
    ],
    headers: [
      {text: 'Статус', value: 'status'},
      {text: 'Ошибки', value: 'errors'},
      {text: 'Данные', value: 'data'},
    ],
  }),
}
</script>
