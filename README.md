# Performance Optimizer

**A lightweight WordPress plugin designed to boost performance by disabling unnecessary features in WooCommerce and Jetpack.**  
Ideal for WooCommerce stores looking to streamline operations and reduce server load.

## 🔧 Features

- **Disables WooCommerce Order Splitter Async Queue**  
  Prevents unnecessary background processing to speed up order handling.

- **Disables Jetpack Bloat Modules**  
  Automatically disables modules like:
  - `scan`
  - `protect`
  - `photon`
  - `related-posts`

- **Automatically Deactivates Jetpack Scan (if active)**  
  Ensures Jetpack’s heavy scanning module is turned off and logs it.

- **Optional: Disables WP-Cron**  
  *(Uncomment the line to enable this feature)*  
  For those using a real cron job instead of WordPress's built-in pseudo-cron.

- **Optional: Reduces Heartbeat API Frequency**  
  Reduces the frequency of AJAX calls from 15s to 60s to lessen load.

## 🚀 Installation

1. Upload the plugin folder to `/wp-content/plugins/` or install via the WordPress Plugin Upload interface.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. *(Optional)* Uncomment the `DISABLE_WP_CRON` line in the plugin if you're using real server-side cron.

## 📁 File Structure

```bash
dsi-performance-optimizer/
└── dsi-performance-optimizer.php
```

## 💡 Usage Notes

- No configuration is necessary. The plugin works immediately upon activation.
- Useful for developers and store owners who want a quick way to cut bloat and optimize backend performance.

## 🛠 Compatibility

- WordPress 5.0+
- WooCommerce
- Jetpack (module control)

## 📜 License

This plugin is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

**Author**: [Michael Patrick](https://www.dragonsociety.com/)  
For support or feedback, please open an issue or submit a pull request.
