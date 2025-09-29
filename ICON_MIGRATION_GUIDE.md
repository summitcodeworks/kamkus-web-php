# Icon Migration Guide - Font Awesome to Custom SVG Icons

## Overview
This guide provides instructions for migrating from Font Awesome icons to custom SVG-based flat icons across the Kamkus College website.

## ✅ **Completed Changes**

### Files Updated:
1. **`includes/header.php`** - ✅ Migrated to custom icons
2. **`css/custom-icons.css`** - ✅ Created with all icon definitions
3. **`css/icon-fixes.css`** - ✅ Removed (no longer needed)

## 🔄 **Migration Required for Other Files**

Based on the search results, the following files need to be updated:

### 1. Infrastructure Pages
- `infrastructure/classroom.php`
- `infrastructure/infrastructure.php`

### 2. Student Corner Pages
- `student-corner/value-added-program.php`
- `student-corner/gallery-login.php`
- `student-corner/gallery-dashboard.php`

## 📋 **Icon Conversion Reference**

### Font Awesome → Custom Icon Classes

| Font Awesome Class | Custom Icon Class | Usage |
|-------------------|-------------------|-------|
| `fas fa-phone` | `icon icon-phone` | Phone numbers |
| `fas fa-envelope` | `icon icon-email` | Email addresses |
| `fas fa-caret-down` | `icon icon-dropdown` | Dropdown arrows |
| `fas fa-home` | `icon icon-home` | Home/breadcrumb |
| `fas fa-chevron-right` | `icon icon-chevron-right` | Breadcrumb separators |
| `fas fa-graduation-cap` | `icon icon-graduation` | Academic content |
| `fas fa-building` | `icon icon-building` | Infrastructure |
| `fas fa-users` | `icon icon-users` | Groups/teams |
| `fas fa-user` | `icon icon-user` | Individual user |
| `fas fa-calendar` | `icon icon-calendar` | Dates/events |
| `fas fa-clock` | `icon icon-clock` | Time |
| `fas fa-book` | `icon icon-book` | Books/reading |
| `fas fa-laptop` | `icon icon-laptop` | Technology |
| `fas fa-tv` | `icon icon-tv` | Displays/screens |
| `fas fa-wifi` | `icon icon-wifi` | Internet/connectivity |
| `fas fa-camera` | `icon icon-camera` | Photography |
| `fas fa-images` | `icon icon-images` | Gallery/photos |
| `fas fa-upload` | `icon icon-upload` | File upload |
| `fas fa-download` | `icon icon-download` | File download |
| `fas fa-eye` | `icon icon-eye` | View/visibility |
| `fas fa-edit` | `icon icon-edit` | Edit/modify |
| `fas fa-trash` | `icon icon-trash` | Delete |
| `fas fa-check` | `icon icon-check` | Success/confirm |
| `fas fa-times` | `icon icon-close` | Close/cancel |
| `fas fa-star` | `icon icon-star` | Rating/favorite |
| `fas fa-award` | `icon icon-award` | Achievement |
| `fas fa-search` | `icon icon-search` | Search functionality |
| `fas fa-arrow-right` | `icon icon-arrow-right` | Navigation |
| `fas fa-arrow-left` | `icon icon-arrow-left` | Navigation |
| `fas fa-external-link-alt` | `icon icon-external` | External links |
| `fas fa-spinner fa-spin` | `icon icon-spinner` | Loading states |

## 🔧 **Step-by-Step Migration Process**

### Step 1: Update HTML Structure
**Before:**
```html
<i class="fas fa-phone"></i>
```

**After:**
```html
<span class="icon icon-phone"></span>
```

### Step 2: Update CSS Selectors
**Before:**
```css
.contact-info i.fas.fa-phone {
    margin-right: 8px;
}
```

**After:**
```css
.contact-info .icon-phone {
    margin-right: 8px;
}
```

### Step 3: Update JavaScript Selectors
**Before:**
```javascript
document.querySelector('.fas.fa-spinner')
```

**After:**
```javascript
document.querySelector('.icon-spinner')
```

## 📝 **Specific File Updates Needed**

### 1. `infrastructure/classroom.php`
**Lines to Update:**
- Line 265: `<i class="fas fa-home"></i>` → `<span class="icon icon-home"></span>`
- Line 268: `<i class="fas fa-chevron-right"></i>` → `<span class="icon icon-chevron-right"></span>`
- Line 287: `<i class="fas fa-school"></i>` → `<span class="icon icon-building"></span>`
- Line 295: `<i class="fas fa-chalkboard-teacher"></i>` → `<span class="icon icon-user"></span>`
- Line 315: `<i class="fas fa-th-large"></i>` → `<span class="icon icon-menu"></span>`
- Line 332: `<i class="fas fa-laptop"></i>` → `<span class="icon icon-laptop"></span>`
- Line 341: `<i class="fas fa-tv"></i>` → `<span class="icon icon-tv"></span>`
- Line 374: `<i class="fas fa-wifi"></i>` → `<span class="icon icon-wifi"></span>`
- Line 514: `<i class="fas fa-arrow-right"></i>` → `<span class="icon icon-arrow-right"></span>`
- Line 580: `<i class="fas fa-external-link-alt"></i>` → `<span class="icon icon-external"></span>`

### 2. `student-corner/gallery-login.php`
**Lines to Update:**
- Line 243: `<i class="fas fa-camera"></i>` → `<span class="icon icon-camera"></span>`
- Line 291: `<i class="fas fa-sign-in-alt"></i>` → `<span class="icon icon-arrow-right"></span>`
- Line 315: `<i class="fas fa-spinner fa-spin"></i>` → `<span class="icon icon-spinner"></span>`

### 3. `student-corner/value-added-program.php`
**Lines to Update:**
- Line 155: `<i class="fas fa-plus-circle"></i>` → `<span class="icon icon-check"></span>`
- Line 163: `<i class="fas fa-award"></i>` → `<span class="icon icon-award"></span>`
- Line 183: `<i class="fas fa-book-open"></i>` → `<span class="icon icon-book"></span>`
- Line 344-380: All calendar icons → `<span class="icon icon-calendar"></span>`
- Line 401-406: PDF and user icons → Update accordingly

## 🎨 **Icon Sizing Options**

### Available Size Classes:
- `.icon` - Default 16px × 16px
- `.icon-lg` - Large 20px × 20px  
- `.icon-xl` - Extra large 24px × 24px

### Usage Examples:
```html
<!-- Default size -->
<span class="icon icon-phone"></span>

<!-- Large size -->
<span class="icon icon-lg icon-graduation"></span>

<!-- Extra large size -->
<span class="icon icon-xl icon-university"></span>
```

## 🔍 **Testing Checklist**

After migration, verify:
- [ ] All icons display correctly
- [ ] Icons maintain proper spacing
- [ ] Hover effects work as expected
- [ ] Icons scale properly on mobile devices
- [ ] Loading animations function correctly
- [ ] Print styles hide icons appropriately

## 🚀 **Benefits of Custom SVG Icons**

1. **Reliability** - No external dependencies
2. **Performance** - Faster loading, no CDN requests
3. **Consistency** - Uniform flat design across the site
4. **Scalability** - Perfect at any size
5. **Customization** - Easy to modify colors and styles
6. **Accessibility** - Better screen reader support

## 🛠 **Maintenance**

### Adding New Icons:
1. Create SVG data URL in `css/custom-icons.css`
2. Follow the naming convention: `.icon-[name]`
3. Include responsive adjustments if needed
4. Test across different browsers

### Updating Existing Icons:
1. Modify the SVG data URL in the CSS file
2. Maintain the same class name for compatibility
3. Test all pages using the icon

## 📞 **Support**

If you encounter issues during migration:
1. Check the browser console for errors
2. Verify CSS file is loading correctly
3. Ensure class names match exactly
4. Test in different browsers

---

**Migration Status**: Header Complete ✅  
**Remaining Files**: 5 files need updates  
**Estimated Time**: 2-3 hours for complete migration 