import Vue from "vue";
import Example from "./components/ExampleComponent";
import About from "./pages/About";
import Contact from "./pages/Contact";
import Policy from "./pages/Policy";
import Top from "./pages/Top";
import User from "./pages/User";
import UserEdit from "./pages/UserEdit";
import Devices from "./pages/Devices";
import DevicesGenre from "./pages/DevicesGenre";
import DeviceProduct from "./pages/DeviceProduct";
import DeviceProductEdit from "./pages/DeviceProductEdit";
import Makers from "./pages/Makers";
import MakerAdd from "./pages/MakerAdd";
import MakerEdit from "./pages/MakerEdit";
import Login from "./pages/Login";
import Logout from "./pages/Logout";
import Register from "./pages/Register";

new Vue({
  el: '#app',
  components: {
    'example-component': Example,
    'about-component': About,
    'contact-component': Contact,
    'policy-component': Policy,
    'top-component': Top,
    'user-component': User,
    'user-edit-component': UserEdit,
    'devices-component': Devices,
    'devices-genre-component': DevicesGenre,
    'device-product-component': DeviceProduct,
    'device-product-edit-component': DeviceProductEdit,
    'makers-component': Makers,
    'maker-add-component': MakerAdd,
    'maker-edit-component': MakerEdit,
    'login-component': Login,
    'logout-component': Logout,
    'register-component': Register,
  }
});
