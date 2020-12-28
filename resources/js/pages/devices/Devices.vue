<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="py-12 my-12">
      <!-- ヘッドセット -->
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Headset</v-card-title>
        <v-btn
          href="/devices/headsets"
          color="primary"
          text
          block
        >
          ヘッドセットのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.headset"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
      <!-- キーボード -->
      <v-divider></v-divider>
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Keyboard</v-card-title>
        <v-btn
          href="/devices/keyboards"
          color="primary"
          text
          block
        >
          キーボードのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.keyboard"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
      <!-- マイク -->
      <v-divider></v-divider>
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Mic</v-card-title>
        <v-btn
          href="/devices/mics"
          color="primary"
          text
          block
        >
          マイクのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.mic"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
      <!-- モニター -->
      <v-divider></v-divider>
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Monitor</v-card-title>
        <v-btn
          href="/devices/monitors"
          color="primary"
          text
          block
        >
          モニターのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.monitor"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
      <!-- マウス -->
      <v-divider></v-divider>
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Mouse</v-card-title>
        <v-btn
          href="/devices/mouses"
          color="primary"
          text
          block
        >
          マウスのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.mouse"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
      <!-- マウスバンジー -->
      <v-divider></v-divider>
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Mouse Bungee</v-card-title>
        <v-btn
          href="/devices/mousebungees"
          color="primary"
          text
          block
        >
          マウスバンジーのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.mousebungee"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
      <!-- マウスパッド -->
      <v-divider></v-divider>
      <v-card
        class="py-8"
        flat 
      >
        <v-card-title class="justify-center">Mouse Pad</v-card-title>
        <v-btn
          href="/devices/mousepads"
          color="primary"
          text
          block
        >
          マウスパッドのみの閲覧はこちら
        </v-btn>
        <v-row>
          <v-col
            v-for="device in devices.mousepad"
            :key="device.value"
            :cols="3"
          >
            <v-card
              outlined
              height=150
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                v-text="device.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
              ></v-card-text>
              <v-card-text
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
    <footer-component></footer-component>
  </v-app>
</template>

<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'

export default {
  components: {
    'header-component': Header,
    'footer-component': Footer,
  },
  props: [
    'devices',
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
