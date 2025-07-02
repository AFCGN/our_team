<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Corporate Governance Network (ACGN)</title>
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate On Scroll Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Swiper CSS for Sliders -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #8B4513; /* Deep Brown */
            --primary-dark: #654321; /* Darker Brown */
            --primary-light: #A0522D; /* Lighter Brown */
            --secondary: #ffffff;
            --accent: #2E8B57; /* Sea Green */
            --accent-light: #3CB371; /* Medium Sea Green */
            --accent-dark: #228B22; /* Forest Green */
            --highlight: #FF8C00; /* Dark Orange */
            --highlight-light: #FFA500; /* Orange */
            --alert: #CD5C5C; /* Indian Red */
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            --brown-50: #fdf8f6;
            --brown-100: #f2e8e5;
            --brown-200: #eaddd7;
            --brown-300: #e0cec7;
            --brown-400: #d2bab0;
            --brown-500: #bfa094;
            --brown-600: #a18072;
            --brown-700: #977669;
            --brown-800: #846358;
            --brown-900: #43302b;
            --green-50: #f0fdf4;
            --green-100: #dcfce7;
            --green-200: #bbf7d0;
            --green-800: #166534;
            --orange-50: #fff7ed;
            --orange-100: #ffedd5;
            --orange-200: #fed7aa;
            --orange-800: #9a3412;
            --transition-normal: all 0.3s ease;
            --transition-slow: all 0.5s ease;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--gray-700);
            overflow-x: hidden;
        }
        
        /* Utility Classes */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .text-center {
            text-align: center;
        }
        
        .flex {
            display: flex;
        }
        
        .flex-col {
            flex-direction: column;
        }
        
        .items-center {
            align-items: center;
        }
        
        .justify-between {
            justify-content: space-between;
        }
        
        .justify-center {
            justify-content: center;
        }
        
        .space-x-2 > * + * {
            margin-left: 0.5rem;
        }
        
        .space-x-4 > * + * {
            margin-left: 1rem;
        }
        
        .space-x-6 > * + * {
            margin-left: 1.5rem;
        }
        
        .space-y-2 > * + * {
            margin-top: 0.5rem;
        }
        
        .space-y-4 > * + * {
            margin-top: 1rem;
        }
        
        .space-y-6 > * + * {
            margin-top: 1.5rem;
        }
        
        .space-y-8 > * + * {
            margin-top: 2rem;
        }
        
        .grid {
            display: grid;
        }
        
        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }
        
        .gap-4 {
            gap: 1rem;
        }
        
        .gap-6 {
            gap: 1.5rem;
        }
        
        .gap-8 {
            gap: 2rem;
        }
        
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        
        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        
        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        
        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        
        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }
        
        .py-24 {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }
        
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        
        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        
        .pt-4 {
            padding-top: 1rem;
        }
        
        .pt-6 {
            padding-top: 1.5rem;
        }
        
        .pt-8 {
            padding-top: 2rem;
        }
        
        .pb-2 {
            padding-bottom: 0.5rem;
        }
        
        .pb-4 {
            padding-bottom: 1rem;
        }
        
        .pb-6 {
            padding-bottom: 1.5rem;
        }
        
        .mb-2 {
            margin-bottom: 0.5rem;
        }
        
        .mb-4 {
            margin-bottom: 1rem;
        }
        
        .mb-6 {
            margin-bottom: 1.5rem;
        }
        
        .mb-8 {
            margin-bottom: 2rem;
        }
        
        .mb-12 {
            margin-bottom: 3rem;
        }
        
        .mt-2 {
            margin-top: 0.5rem;
        }
        
        .mt-4 {
            margin-top: 1rem;
        }
        
        .mt-6 {
            margin-top: 1.5rem;
        }
        
        .mt-8 {
            margin-top: 2rem;
        }
        
        .mt-12 {
            margin-top: 3rem;
        }
        
        .ml-2 {
            margin-left: 0.5rem;
        }
        
        .ml-4 {
            margin-left: 1rem;
        }
        
        .mr-2 {
            margin-right: 0.5rem;
        }
        
        .mr-4 {
            margin-right: 1rem;
        }
        
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        
        .w-full {
            width: 100%;
        }
        
        .max-w-md {
            max-width: 28rem;
        }
        
        .max-w-lg {
            max-width: 32rem;
        }
        
        .max-w-xl {
            max-width: 36rem;
        }
        
        .max-w-2xl {
            max-width: 42rem;
        }
        
        .max-w-3xl {
            max-width: 48rem;
        }
        
        .max-w-4xl {
            max-width: 56rem;
        }
        
        .max-w-5xl {
            max-width: 64rem;
        }
        
        .h-4 {
            height: 1rem;
        }
        
        .h-5 {
            height: 1.25rem;
        }
        
        .h-6 {
            height: 1.5rem;
        }
        
        .h-8 {
            height: 2rem;
        }
        
        .h-12 {
            height: 3rem;
        }
        
        .h-full {
            height: 100%;
        }
        
        .w-4 {
            width: 1rem;
        }
        
        .w-5 {
            width: 1.25rem;
        }
        
        .w-6 {
            width: 1.5rem;
        }
        
        .w-8 {
            width: 2rem;
        }
        
        .w-12 {
            width: 3rem;
        }
        
        .rounded-full {
            border-radius: 9999px;
        }
        
        .rounded-lg {
            border-radius: 0.5rem;
        }
        
        .rounded {
            border-radius: 0.25rem;
        }
        
        .border {
            border-width: 1px;
            border-style: solid;
        }
        
        .border-t {
            border-top-width: 1px;
            border-top-style: solid;
        }
        
        .border-b {
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }
        
        .border-gray-200 {
            border-color: var(--gray-200);
        }
        
        .border-gray-300 {
            border-color: var(--gray-300);
        }
        
        .border-blue-800 {
            border-color: var(--blue-800);
        }
        
        .bg-white {
            background-color: white;
        }
        
        .bg-gray-50 {
            background-color: var(--gray-50);
        }
        
        .bg-gray-100 {
            background-color: var(--gray-100);
        }
        
        .bg-primary {
            background-color: var(--primary);
        }
        
        .text-white {
            color: white;
        }
        
        .text-primary {
            color: var(--primary);
        }
        
        .text-gray-500 {
            color: var(--gray-500);
        }
        
        .text-gray-600 {
            color: var(--gray-600);
        }
        
        .text-gray-700 {
            color: var(--gray-700);
        }
        
        .text-blue-200 {
            color: var(--blue-200);
        }
        
        .text-sm {
            font-size: 0.875rem;
        }
        
        .text-lg {
            font-size: 1.125rem;
        }
        
        .text-xl {
            font-size: 1.25rem;
        }
        
        .text-2xl {
            font-size: 1.5rem;
        }
        
        .text-3xl {
            font-size: 1.875rem;
        }
        
        .text-4xl {
            font-size: 2.25rem;
        }
        
        .text-5xl {
            font-size: 3rem;
        }
        
        .font-semibold {
            font-weight: 600;
        }
        
        .font-bold {
            font-weight: 700;
        }
        
        .italic {
            font-style: italic;
        }
        
        .leading-tight {
            line-height: 1.25;
        }
        
        .list-disc {
            list-style-type: disc;
        }
        
        .pl-5 {
            padding-left: 1.25rem;
        }
        
        .shadow {
            box-shadow: var(--shadow);
        }
        
        .shadow-md {
            box-shadow: var(--shadow-md);
        }
        
        .shadow-lg {
            box-shadow: var(--shadow-lg);
        }
        
        .shadow-xl {
            box-shadow: var(--shadow-xl);
        }
        
        .transition {
            transition: var(--transition-normal);
        }
        
        .transition-slow {
            transition: var(--transition-slow);
        }
        
        .hover\:bg-primary:hover {
            background-color: var(--primary);
        }
        
        .hover\:bg-primary-light:hover {
            background-color: var(--primary-light);
        }
        
        .hover\:bg-white:hover {
            background-color: white;
        }
        
        .hover\:bg-blue-100:hover {
            background-color: var(--blue-100);
        }
        
        .hover\:text-white:hover {
            color: white;
        }
        
        .hover\:text-primary:hover {
            color: var(--primary);
        }
        
        .hover\:text-blue-200:hover {
            color: var(--blue-200);
        }
        
        .hover\:shadow-lg:hover {
            box-shadow: var(--shadow-lg);
        }
        
        .overflow-hidden {
            overflow: hidden;
        }
        
        .aspect-video {
            aspect-ratio: 16 / 9;
        }
        
        .object-cover {
            object-fit: cover;
        }
        
        .relative {
            position: relative;
        }
        
        .absolute {
            position: absolute;
        }
        
        .hidden {
            display: none;
        }
        
        /* Header Styles */
        header {
            background-color: var(--primary);
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
        }
        
        header nav a {
            color: white;
            text-decoration: none;
            transition: var(--transition-normal);
        }
        
        header nav a:hover {
            color: var(--blue-200);
        }
        
        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            border-radius: 0.25rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: var(--transition-normal);
            border: 1px solid transparent;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-light);
        }
        
        .btn-secondary {
            background-color: var(--accent);
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: var(--accent-light);
        }
        
        .btn-outline {
            background-color: transparent;
            border-color: currentColor;
        }
        
        .btn-outline-white {
            color: white;
            border-color: white;
        }
        
        .btn-outline-white:hover {
            background-color: white;
            color: var(--primary);
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
        }
        
        /* Card Styles */
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition-normal);
            border: 1px solid var(--brown-200);
        }
        
        .card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-5px);
            border-color: var(--accent);
        }
        
        .card-header {
            padding: 1.5rem 1.5rem 0.5rem;
        }
        
        .card-content {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        .card-description {
            color: var(--gray-500);
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(to bottom, var(--primary), var(--primary-light));
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }
        
        .hero .container {
            position: relative;
            z-index: 1;
        }
        
        /* Timeline Styles */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .timeline-item {
            padding: 0 0 2rem 2rem;
            position: relative;
        }
        
        .timeline-item:before {
            content: '';
            position: absolute;
            width: 2px;
            background-color: var(--gray-200);
            top: 0;
            bottom: 0;
            left: 0;
        }
        
        .timeline-icon {
            position: absolute;
            left: -10px;
            width: 20px;
            height: 20px;
            background-color: var(--primary);
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-content {
            padding-left: 1rem;
        }
        
        .timeline-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        /* Testimonial Styles */
        .testimonial {
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            background-color: white;
            transition: var(--transition-normal);
        }
        
        .testimonial:hover {
            box-shadow: var(--shadow-lg);
        }
        
        .testimonial-quote {
            font-style: italic;
            color: var(--gray-600);
            margin-bottom: 1rem;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--gray-700);
        }
        
        .testimonial-org {
            color: var(--gray-500);
            font-size: 0.875rem;
        }
        
        /* Tab Styles */
        .tabs {
            display: flex;
            flex-direction: column;
            max-width: 100%;
            margin: 0 auto;
        }
        
        .tab-list {
            display: flex;
            border-bottom: 1px solid var(--gray-200);
            margin-bottom: 1rem;
        }
        
        .tab-trigger {
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: var(--transition-normal);
        }
        
        .tab-trigger.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        /* Footer Styles */
        footer {
            background-color: var(--primary);
            color: white;
            padding: 3rem 0;
            background-image: url('https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--primary);
            opacity: 0.9;
            z-index: 0;
        }
        
        footer .container {
            position: relative;
            z-index: 1;
        }
        
        footer a {
            color: var(--highlight-light);
            text-decoration: none;
            transition: var(--transition-normal);
        }
        
        footer a:hover {
            color: white;
        }
        
        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--primary);
            z-index: 999;
            padding: 2rem;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .mobile-menu a {
            color: white;
            text-decoration: none;
            font-size: 1.25rem;
            margin: 1rem 0;
            transition: var(--transition-normal);
        }
        
        .mobile-menu a:hover {
            color: var(--blue-200);
        }
        
        .mobile-menu-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Animation Keyframes */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes slideInDown {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        @keyframes gradientBg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Animation Classes */
        .animate-fade-in {
            animation: fadeIn 1s ease;
        }
        
        .animate-slide-left {
            animation: slideInLeft 1s ease;
        }
        
        .animate-slide-right {
            animation: slideInRight 1s ease;
        }
        
        .animate-slide-up {
            animation: slideInUp 1s ease;
        }
        
        .animate-slide-down {
            animation: slideInDown 1s ease;
        }
        
        .animate-zoom-in {
            animation: zoomIn 1s ease;
        }
        
        .animate-bounce {
            animation: bounce 2s infinite;
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        .animate-spin {
            animation: spin 10s linear infinite;
        }
        
        .animate-shake {
            animation: shake 0.5s ease-in-out;
        }
        
        .animate-gradient {
            background: linear-gradient(270deg, var(--primary), var(--primary-light), var(--accent));
            background-size: 600% 600%;
            animation: gradientBg 8s ease infinite;
        }
        
        /* Icon Animation */
        .icon-pulse {
            animation: pulse 2s infinite;
        }
        
        .icon-spin {
            animation: spin 10s linear infinite;
        }
        
        .icon-float {
            animation: float 3s ease-in-out infinite;
        }
        
        .icon-shake:hover {
            animation: shake 0.5s ease-in-out;
        }
        
        /* Image Styles */
        .img-overlay {
            position: relative;
            overflow: hidden;
        }
        
        .img-overlay::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));
            z-index: 1;
        }
        
        .img-overlay-content {
            position: relative;
            z-index: 2;
        }
        
        .img-zoom {
            transition: transform 0.5s ease;
        }
        
        .img-zoom:hover {
            transform: scale(1.05);
        }
        
        /* Background Patterns */
        .bg-pattern-dots {
            background-image: radial-gradient(var(--brown-300) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .bg-pattern-lines {
            background: repeating-linear-gradient(
                45deg,
                var(--brown-100),
                var(--brown-100) 10px,
                var(--brown-50) 10px,
                var(--brown-50) 20px
            );
        }
        
        /* Responsive Styles */
        @media (min-width: 768px) {
            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            
            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            
            .md\:flex {
                display: flex;
            }
            
            .md\:flex-row {
                flex-direction: row;
            }
            
            .md\:w-1\/2 {
                width: 50%;
            }
            
            .md\:w-1\/3 {
                width: 33.333333%;
            }
            
            .md\:w-2\/3 {
                width: 66.666667%;
            }
            
            .md\:block {
                display: block;
            }
            
            .md\:hidden {
                display: none;
            }
        }
        
        @media (min-width: 1024px) {
            
            .md\:block {
                display: block;
            }
            
            .md\:hidden {
                display: none;
            }
        }
        
        @media (min-width: 1024px) {
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }
        
        @media (max-width: 767px) {
            .mobile-menu-btn {
                display: block;
            }
            
            header nav {
                display: none;
            }
            
            .hidden-mobile {
                display: none;
            }
        }
        
        /* Swiper Slider Styles */
        .swiper {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        
        .swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Chatbot Styles */
        .chatbot-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        
        /* Logo Animation */
        .logo-container {
            position: relative;
            display: flex;
            align-items: center;
            max-width: 200px; /* Limit container width */
        }
        
        .logo-icon {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo-icon img {
            width: 40px; /* Fixed width for logo */
            height: 40px; /* Fixed height for logo */
            object-fit: contain; /* Maintain aspect ratio */
            border-radius: 50%;
        }
        
        .logo-pulse {
            position: absolute;
            width: 40px; /* Match logo size */
            height: 40px; /* Match logo size */
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
            z-index: 0;
            animation: pulse 2s infinite;
        }
        
        /* Floating Elements */
        .floating-element {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Rotating Elements */
        .rotating-element {
            animation: spin 20s linear infinite;
        }
        
        /* Parallax Effect */
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /* Image Gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }
        
        /* Animated Background */
        .animated-bg {
            background: linear-gradient(-45deg, var(--primary-dark), var(--primary), var(--accent), var(--highlight));
            background-size: 400% 400%;
            animation: gradientBg 15s ease infinite;
        }
        
        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
        }
        
        .scroll-arrow {
            margin-top: 0.5rem;
            font-size: 1.5rem;
            animation: bounce 2s infinite;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="py-4">
        <div class="container flex justify-between items-center">
            <div class="logo-container">
                <div class="logo-pulse"></div>
                <div class="logo-icon">
                    <img src="logo.png" alt="ACGN Logo" class="animate-pulse">
                    <h1 class="text-xl md:text-2xl font-bold">ACGN</h1>
                </div>
            </div>
            
            <nav class="hidden md:flex space-x-6">
                <a href="#about"><i class="fas fa-info-circle mr-1 icon-pulse"></i> About</a>
                <a href="#values"><i class="fas fa-star mr-1 icon-pulse"></i> Values</a>
                <a href="#services"><i class="fas fa-cogs mr-1 icon-pulse"></i> Services</a>
                <a href="#certification"><i class="fas fa-certificate mr-1 icon-pulse"></i> Certification</a>
                <a href="#achievements"><i class="fas fa-trophy mr-1 icon-pulse"></i> Achievements</a>
                <a href="#contact"><i class="fas fa-envelope mr-1 icon-pulse"></i> Contact</a>
            </nav>
            
            <a href="#" class="btn btn-outline-white hidden md:block">
                <i class="fas fa-user mr-1 icon-pulse"></i> Member Login
            </a>
            
            <button class="mobile-menu-btn">
                <i class="fas fa-bars animate-pulse"></i>
            </button>
        </div>
    </header>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <button class="mobile-menu-close">
            <i class="fas fa-times"></i>
        </button>
        <a href="#about"><i class="fas fa-info-circle mr-2"></i> About</a>
        <a href="#values"><i class="fas fa-star mr-2"></i> Values</a>
        <a href="#services"><i class="fas fa-cogs mr-2"></i> Services</a>
        <a href="#certification"><i class="fas fa-certificate mr-2"></i> Certification</a>
        <a href="#achievements"><i class="fas fa-trophy mr-2"></i> Achievements</a>
        <a href="#contact"><i class="fas fa-envelope mr-2"></i> Contact</a>
        <a href="#" class="btn btn-outline-white mt-4"><i class="fas fa-user mr-1"></i> Member Login</a>
    </div>
    
    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero py-16 md:py-24" data-aos="fade-in">
            <div class="container">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0" data-aos="slide-right" data-aos-delay="200">
                        <h1 class="text-3xl md:text-5xl font-bold mb-4">African Corporate Governance Network</h1>
                        <p class="text-lg md:text-xl mb-6">
                            <i class="fas fa-check-circle mr-2 animate-pulse"></i> Promoting effective corporate governance practices in Africa, fostering transparency, accountability,
                            and ethical leadership within organizations.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#about" class="btn btn-secondary animate-pulse">
                                <i class="fas fa-arrow-right mr-1"></i> Learn More
                            </a>
                            <a href="#contact" class="btn btn-outline-white animate-float">
                                <i class="fas fa-users mr-1"></i> Join Our Network
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center" data-aos="slide-left" data-aos-delay="400">
                        <div class="relative w-full max-w-md aspect-video rounded-lg overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="African Corporate Governance Network" class="object-cover w-full h-full img-zoom">
                            <div class="absolute top-0 left-0 w-full h-full bg-primary opacity-30"></div>
                            <div class="absolute top-2 right-2 bg-white text-primary rounded-full p-2 animate-float">
                                <i class="fas fa-globe-africa fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="scroll-indicator">
                    <span>Scroll Down</span>
                    <div class="scroll-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Section -->
        <section id="about" class="py-16 bg-white">
            <div class="container">
                <div class="max-w-3xl mx-auto text-center mb-12" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-info-circle fa-2x"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">About The ACGN</h2>
                    <p class="text-gray-600 mb-6">
                        The African Corporate Governance Network (ACGN) is a professional network focused on enhancing corporate
                        governance across Africa. We are committed to promoting effective corporate governance practices that
                        foster transparency, accountability, and ethical leadership within organizations.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-bullseye mr-2 text-primary animate-pulse"></i>
                                Our Mission
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Our Mission" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                The mission of ACGN is to promote effective corporate governance practices in Africa, fostering
                                transparency, accountability, and ethical leadership within organizations.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-primary animate-pulse"></i>
                                Our Vision
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1507608616759-54f48f0af0ee?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Our Vision" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                ACGN envisions a continent where corporate governance is recognized as a critical component of
                                sustainable development and economic growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Core Values Section -->
        <section id="values" class="py-16 bg-pattern-dots">
            <div class="container">
                <div class="text-center mb-12" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-star fa-2x"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">Our Core Values</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="card text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-header flex flex-col items-center">
                            <div class="h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center mb-4 animate-pulse">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="card-title">Integrity</div>
                        </div>
                        <div class="card-content">
                            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Integrity" class="w-full h-32 object-cover rounded-lg mb-4">
                            <p class="text-gray-600">Upholding ethical standards and transparency in governance.</p>
                        </div>
                    </div>
                    
                    <div class="card text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-header flex flex-col items-center">
                            <div class="h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center mb-4 animate-pulse">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="card-title">Collaboration</div>
                        </div>
                        <div class="card-content">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Collaboration" class="w-full h-32 object-cover rounded-lg mb-4">
                            <p class="text-gray-600">
                                Building partnerships with stakeholders to enhance governance practices.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header flex flex-col items-center">
                            <div class="h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center mb-4 animate-pulse">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="card-title">Innovation</div>
                        </div>
                        <div class="card-content">
                            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Innovation" class="w-full h-32 object-cover rounded-lg mb-4">
                            <p class="text-gray-600">Embracing new ideas and approaches to improve corporate governance.</p>
                        </div>
                    </div>
                    
                    <div class="card text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-header flex flex-col items-center">
                            <div class="h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center mb-4 animate-pulse">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="card-title">Community Focus</div>
                        </div>
                        <div class="card-content">
                            <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Community Focus" class="w-full h-32 object-cover rounded-lg mb-4">
                            <p class="text-gray-600">
                                Engaging with local communities to promote governance awareness and education.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services and Programs Section -->
        <section id="services" class="py-16 bg-white">
            <div class="container">
                <div class="text-center mb-12" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-cogs fa-2x animate-spin"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">Services and Programs</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="card flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-header">
                            <div class="mb-4 text-primary">
                                <i class="fas fa-users fa-2x animate-pulse"></i>
                            </div>
                            <div class="card-title">Director Development Programs</div>
                        </div>
                        <div class="card-content flex-grow">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1560439514-4e9645039924?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Director Development" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                ACGN provides training and development programs for directors to enhance their governance
                                competencies, focusing on leadership, risk management, and sustainability.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-header">
                            <div class="mb-4 text-primary">
                                <i class="fas fa-book-open fa-2x animate-pulse"></i>
                            </div>
                            <div class="card-title">Research and Publications</div>
                        </div>
                        <div class="card-content flex-grow">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Research and Publications" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                The organization conducts research and publishes reports on corporate governance trends, best
                                practices, and regulatory updates.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card flex flex-col h-full" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header">
                            <div class="mb-4 text-primary">
                                <i class="fas fa-network-wired fa-2x animate-pulse"></i>
                            </div>
                            <div class="card-title">Networking Opportunities</div>
                        </div>
                        <div class="card-content flex-grow">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Networking Opportunities" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                ACGN facilitates networking events and forums for professionals to share insights and collaborate on
                                governance issues.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 max-w-3xl mx-auto">
                    <h3 class="text-2xl font-bold mb-6 text-center text-primary" data-aos="fade-up">Target Audience</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="card" data-aos="fade-right" data-aos-delay="100">
                            <div class="card-header">
                                <div class="card-title flex items-center">
                                    <i class="fas fa-bullseye mr-2 text-primary animate-pulse"></i>
                                    Primary Audience
                                </div>
                            </div>
                            <div class="card-content">
                                <ul class="list-disc pl-5 space-y-1 text-gray-600">
                                    <li>Corporate directors and executives seeking to improve governance practices</li>
                                    <li>Organizations and companies looking to enhance their governance frameworks</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card" data-aos="fade-left" data-aos-delay="200">
                            <div class="card-header">
                                <div class="card-title flex items-center">
                                    <i class="fas fa-users mr-2 text-primary animate-pulse"></i>
                                    Secondary Audience
                                </div>
                            </div>
                            <div class="card-content">
                                <ul class="list-disc pl-5 space-y-1 text-gray-600">
                                    <li>Regulatory bodies</li>
                                    <li>Academic institutions</li>
                                    <li>Stakeholders interested in corporate governance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Director Certification Project Section -->
        <section id="certification" class="py-16 bg-pattern-lines">
            <div class="container">
                <div class="text-center mb-6" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-certificate fa-2x"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">
                        Director Certification and Utilization Project
                    </h2>
                </div>
                <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">
                    Our flagship initiative to develop a continental framework for professional director certification
                    relevant to the African socio-business context.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-drafting-compass mr-2 text-primary animate-pulse"></i>
                                Framework Development
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Framework Development" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                To develop a continental African framework for professional director certification, relevant to the
                                African socio-business context.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-comments mr-2 text-primary animate-pulse"></i>
                                Consultation & Review
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Consultation & Review" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                To open the framework to wide consultation and review, and promote it to relevant stakeholders
                                across Africa.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-handshake mr-2 text-primary animate-pulse"></i>
                                Adoption & Ratification
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Adoption & Ratification" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                To ensure ratification and adoption of the framework for designing director training programmes
                                across the African continent.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-award mr-2 text-primary animate-pulse"></i>
                                Certification Scheme
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Certification Scheme" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                To develop and promote a certification scheme that is widely recognised and facilitates the
                                utilisation of directors across Africa.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="tabs max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="tab-list">
                        <div class="tab-trigger active" data-tab="training">
                            <i class="fas fa-graduation-cap mr-2 animate-pulse"></i> Training Framework
                        </div>
                        <div class="tab-trigger" data-tab="certification">
                            <i class="fas fa-certificate mr-2 animate-pulse"></i> Certification Scheme
                        </div>
                        <div class="tab-trigger" data-tab="utilization">
                            <i class="fas fa-globe-africa mr-2 animate-pulse"></i> Cross-country Utilization
                        </div>
                    </div>
                    
                    <div class="tab-content active" id="training">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Training Framework</div>
                                <div class="card-description">
                                    Chaired by Professor Henry Agyei-Boapeah and co-chaired by Madam Susan Mutangadura
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Training Framework" class="w-full h-60 object-cover">
                                </div>
                                <div class="space-y-4">
                                    <p>
                                        This component focuses on developing an ACGN Director training framework that harmonizes
                                        existing director training schemes in African countries, fits the context and needs of Africa,
                                        and reflects international best practices in corporate governance.
                                    </p>
                                    <h4 class="font-semibold text-lg">Key Objectives:</h4>
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Develop a harmonized training framework for African directors (Phase 1)</li>
                                        <li>Develop curriculum content and materials for director training across Africa (Phase 2)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="certification">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Certification Scheme</div>
                                <div class="card-description">
                                    Chaired by Mr Theodore Albrieght and co-chaired by Professor Musa Mangena
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Certification Scheme" class="w-full h-60 object-cover">
                                </div>
                                <div class="space-y-4">
                                    <p>
                                        This component focuses on developing a certification scheme that ensures endorsements made by
                                        ACGN are recognized and acceptable to relevant stakeholders across the continent and beyond.
                                    </p>
                                    <h4 class="font-semibold text-lg">Key Objectives:</h4>
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Develop a widely recognized certification scheme</li>
                                        <li>Promote the scheme and explore accreditation mechanisms</li>
                                        <li>Obtain legal/political backing from countries</li>
                                        <li>Improve credibility and value of the scheme</li>
                                        <li>Partner with recognized universities/institutions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="utilization">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Cross-country Director Utilization</div>
                                <div class="card-description">
                                    Chaired by Madam Kevina Appasamy and co-chaired by Professor Teerooven Soobaroyen
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1484626753559-5fa3ea273ae4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cross-country Utilization" class="w-full h-60 object-cover">
                                </div>
                                <div class="space-y-4">
                                    <p>
                                        This component focuses on promoting and marketing the concept of utilization of directors across
                                        the African continent, breaking down barriers to free flow of human resources.
                                    </p>
                                    <h4 class="font-semibold text-lg">Key Objectives:</h4>
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Promote the concept of cross-continent director utilization</li>
                                        <li>Break down barriers (political/legal/social) to free flow of human resources</li>
                                        <li>Develop a framework for an African Register of Directors</li>
                                        <li>Make recommendations for sustainable cross-continent director utilization</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Timeline Section -->
        <section class="py-16 bg-white">
            <div class="container">
                <div class="text-center mb-12" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-clock fa-2x animate-spin"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">Project Timeline</h2>
                </div>
                
                <div class="max-w-3xl mx-auto">
                    <div class="timeline">
                        <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="timeline-icon">
                                <i class="fas fa-calendar-alt text-white text-xs absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate-pulse"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-title">Phase 1: Framework Development</div>
                                <div class="text-gray-600 mb-2">Completion target: Mid-February 2024</div>
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Framework Development" class="w-full h-40 object-cover">
                                </div>
                                <ul class="list-disc pl-5 space-y-1 text-gray-600">
                                    <li>Determine core issues by January 11, 2024</li>
                                    <li>Draft recommendations by February 8, 2024</li>
                                    <li>Finalize draft framework by February 22, 2024</li>
                                    <li>Seek ACGN Board approval by February 29, 2024</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="timeline-icon">
                                <i class="fas fa-calendar-alt text-white text-xs absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate-pulse"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-title">Phase 2: Curriculum Development</div>
                                <div class="text-gray-600 mb-2">Completion target: Q3 2024</div>
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Curriculum Development" class="w-full h-40 object-cover">
                                </div>
                                <div class="text-gray-600">
                                    Development of curriculum content and materials that will be used to train directors across
                                    Africa, based on the framework established in Phase 1.
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="timeline-icon">
                                <i class="fas fa-calendar-alt text-white text-xs absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate-pulse"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-title">Phase 3: Capacity-building</div>
                                <div class="text-gray-600 mb-2">Completion target: Q1 2025</div>
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Capacity Building" class="w-full h-40 object-cover">
                                </div>
                                <div class="text-gray-600">
                                    Implementation of training programs and capacity-building initiatives across the African
                                    continent, utilizing the framework and curriculum developed in earlier phases.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Achievements and Impact Section -->
        <section id="achievements" class="py-16 bg-pattern-dots">
            <div class="container">
                <div class="text-center mb-12" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-trophy fa-2x"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">Achievements and Impact</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-12">
                    <div class="card" data-aos="fade-right" data-aos-delay="100">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-flag-checkered mr-2 text-primary animate-pulse"></i>
                                Key Milestones
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1533750516457-a7f992034fec?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Key Milestones" class="w-full h-40 object-cover">
                            </div>
                            <ul class="list-disc pl-5 space-y-3 text-gray-600">
                                <li>Development of the ACGN DDP Framework, which outlines competencies for effective governance</li>
                                <li>Successful accreditation of various director development programs across Africa</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card" data-aos="fade-left" data-aos-delay="200">
                        <div class="card-header">
                            <div class="card-title flex items-center">
                                <i class="fas fa-hands-helping mr-2 text-primary animate-pulse"></i>
                                Community Impact
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1559025684-0c0aee1a0ba9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Community Impact" class="w-full h-40 object-cover">
                            </div>
                            <p class="text-gray-600">
                                ACGN has positively influenced corporate governance practices in Africa, contributing to improved
                                transparency and accountability in organizations.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold mb-8 text-center text-primary" data-aos="fade-up">Future Goals</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-header">
                                <div class="card-title flex items-center">
                                    <i class="fas fa-bullseye mr-2 text-primary animate-pulse"></i>
                                    Short-term Goals
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Short-term Goals" class="w-full h-40 object-cover">
                                </div>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    <li>Increase the number of accredited director development programs</li>
                                    <li>Expand outreach and engagement with stakeholders across the continent</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-header">
                                <div class="card-title flex items-center">
                                    <i class="fas fa-rocket mr-2 text-primary animate-pulse"></i>
                                    Long-term Goals
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Long-term Goals" class="w-full h-40 object-cover">
                                </div>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    <li>Establish ACGN as a leading authority on corporate governance in Africa</li>
                                    <li>Foster a culture of ethical leadership and governance across all sectors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section class="py-16 bg-white">
            <div class="container">
                <div class="text-center mb-12" data-aos="fade-up">
                    <div class="inline-block mb-4 animate-float">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-4 text-primary">Testimonials</h2>
                </div>
                
                <div class="swiper testimonial-swiper max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="mb-4">
                                    <i class="fas fa-quote-left text-3xl text-primary opacity-50 animate-pulse"></i>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-24 h-24 rounded-full overflow-hidden mr-4">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Corporate Director" class="w-full h-full object-cover">
                                    </div>
                                    <p class="testimonial-quote">
                                        The ACGN's director development program has significantly enhanced my governance skills and provided me with valuable insights that I've been able to apply in my role.
                                    </p>
                                </div>
                                <div class="text-sm">
                                    <p class="testimonial-author">Corporate Director</p>
                                    <p class="testimonial-org">Major Financial Institution</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="mb-4">
                                    <i class="fas fa-quote-left text-3xl text-primary opacity-50 animate-pulse"></i>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-24 h-24 rounded-full overflow-hidden mr-4">
                                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="CEO" class="w-full h-full object-cover">
                                    </div>
                                    <p class="testimonial-quote">
                                        After implementing ACGN's governance recommendations, our organization has seen improved transparency, better decision-making processes, and increased stakeholder confidence.
                                    </p>
                                </div>
                                <div class="text-sm">
                                    <p class="testimonial-author">CEO</p>
                                    <p class="testimonial-org">Pan-African Corporation</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="mb-4">
                                    <i class="fas fa-quote-left text-3xl text-primary opacity-50 animate-pulse"></i>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-24 h-24 rounded-full overflow-hidden mr-4">
                                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Board Member" class="w-full h-full object-cover">
                                    </div>
                                    <p class="testimonial-quote">
                                        The networking opportunities provided by ACGN have been invaluable. I've connected with governance professionals across the continent and gained diverse perspectives.
                                    </p>
                                </div>
                                <div class="text-sm">
                                    <p class="testimonial-author">Board Member</p>
                                    <p class="testimonial-org">Manufacturing Company</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="mb-4">
                                    <i class="fas fa-quote-left text-3xl text-primary opacity-50 animate-pulse"></i>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-24 h-24 rounded-full overflow-hidden mr-4">
                                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Governance Officer" class="w-full h-full object-cover">
                                    </div>
                                    <p class="testimonial-quote">
                                        ACGN's research publications provide cutting-edge insights on governance trends that have helped our organization stay ahead of regulatory changes.
                                    </p>
                                </div>
                                <div class="text-sm">
                                    <p class="testimonial-author">Governance Officer</p>
                                    <p class="testimonial-org">Public Sector Entity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-6"></div>
                </div>
            </div>
        </section>
        
        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-pattern-lines">
            <div class="container">
                <div class="max-w-3xl mx-auto text-center">
                    <div class="inline-block mb-4 animate-float" data-aos="fade-up">
                        <div class="h-16 w-16 rounded-full bg-primary text-white flex items-center justify-center mx-auto">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold mb-6 text-primary" data-aos="fade-up">Get Involved</h2>
                    <p class="text-gray-600 mb-8" data-aos="fade-up" data-aos-delay="100">
                        ACGN encourages professionals to join the network, participate in training programs, and contribute to
                        governance discussions. For more information, please get in touch with us.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary animate-pulse">
                            <i class="fas fa-users mr-1"></i> Join Our Network
                        </a>
                        <a href="#" class="btn btn-outline-primary animate-float">
                            <i class="fas fa-paper-plane mr-1"></i> Contact Us
                        </a>
                    </div>
                    
                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header">
                            <div class="card-title flex items-center justify-center">
                                <i class="fas fa-address-card mr-2 text-primary animate-pulse"></i>
                                Contact Information
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="img-overlay mb-4 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Contact Us" class="w-full h-60 object-cover">
                            </div>
                            <div class="text-left">
                                <p class="mb-4">For inquiries, please contact ACGN at:</p>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <i class="fas fa-envelope mr-2 text-primary animate-pulse"></i>
                                        Email: info@acgn.org
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-phone mr-2 text-primary animate-pulse"></i>
                                        Phone: +123 456 7890
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-map-marker-alt mr-2 text-primary animate-pulse"></i>
                                        Address: Pan-African Corporate Governance Center
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="bg-primary text-white py-12">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="logo-container mb-4">
                        <div class="logo-pulse"></div>
                        <div class="logo-icon">
                            <img src="logo.png" alt="ACGN Logo" class="animate-pulse">
                            <h3 class="text-xl font-bold">ACGN</h3>
                        </div>
                    </div>
                    <p class="text-blue-200 mb-4">African Corporate Governance Network</p>
                    <p class="text-blue-200">Promoting effective corporate governance practices across Africa.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about"><i class="fas fa-chevron-right mr-1 animate-pulse"></i> About</a></li>
                        <li><a href="#values"><i class="fas fa-chevron-right mr-1 animate-pulse"></i> Values</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right mr-1 animate-pulse"></i> Services</a></li>
                        <li><a href="#certification"><i class="fas fa-chevron-right mr-1 animate-pulse"></i> Certification</a></li>
                        <li><a href="#achievements"><i class="fas fa-chevron-right mr-1 animate-pulse"></i> Achievements</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-blue-200 hover:text-white transition">
                            <i class="fab fa-facebook-f fa-lg animate-pulse"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition">
                            <i class="fab fa-twitter fa-lg animate-pulse"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition">
                            <i class="fab fa-instagram fa-lg animate-pulse"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition">
                            <i class="fab fa-linkedin-in fa-lg animate-pulse"></i>
                        </a>
                    </div>
                    <p class="text-blue-200">
                        <i class="fas fa-envelope mr-1"></i> Email: info@acgn.org<br>
                        <i class="fas fa-phone mr-1"></i> Phone: +123 456 7890
                    </p>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-8 text-center text-blue-200">
                <p>&copy; <?php echo date('Y'); ?> African Corporate Governance Network. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Chatbot Widget -->
    <div class="chatbot-widget animate-bounce">
        <!-- Chatbot Script -->
        <script>
            (function(){
                if(!window.chatbase||window.chatbase("getState")!=="initialized"){
                    window.chatbase=(...arguments)=>{
                        if(!window.chatbase.q){window.chatbase.q=[]}
                        window.chatbase.q.push(arguments)
                    };
                    window.chatbase=new Proxy(window.chatbase,{
                        get(target,prop){
                            if(prop==="q"){return target.q}
                            return(...args)=>target(prop,...args)
                        }
                    })
                }
                const onLoad=function(){
                    const script=document.createElement("script");
                    script.src="https://www.chatbase.co/embed.min.js";
                    script.id="NUWzwa1Bzqd1_C38mzvki";
                    script.domain="www.chatbase.co";
                    document.body.appendChild(script)
                };
                if(document.readyState==="complete"){
                    onLoad()
                }else{
                    window.addEventListener("load",onLoad)
                }
            })();
        </script>
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true
        });
        
        // Initialize Swiper Slider for Testimonials
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                }
            },
            effect: 'slide',
            speed: 1000
        });
        
        // Tab Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabTriggers = document.querySelectorAll('.tab-trigger');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabTriggers.forEach(trigger => {
                trigger.addEventListener('click', () => {
                    // Remove active class from all triggers and contents
                    tabTriggers.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked trigger
                    trigger.classList.add('active');
                    
                    // Show corresponding content
                    const tabId = trigger.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Mobile Menu Toggle
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const mobileMenuCloseBtn = document.querySelector('.mobile-menu-close');
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
            
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.style.display = 'flex';
                setTimeout(() => {
                    mobileMenu.style.opacity = '1';
                }, 10);
            });
            
            mobileMenuCloseBtn.addEventListener('click', closeMobileMenu);
            
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });
            
            function closeMobileMenu() {
                mobileMenu.style.opacity = '0';
                setTimeout(() => {
                    mobileMenu.style.display = 'none';
                }, 300);
            }
            
            // Smooth Scrolling for Anchor Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Add slide-in animations to elements when scrolling
            window.addEventListener('scroll', revealOnScroll);
            
            function revealOnScroll() {
                const elements = document.querySelectorAll('.card:not([data-aos])');
                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('animate-slide-up');
                    }
                });
            }
            
            // Parallax effect for background images
            window.addEventListener('scroll', function() {
                const parallaxElements = document.querySelectorAll('.parallax-bg');
                parallaxElements.forEach(element => {
                    const scrollPosition = window.pageYOffset;
                    element.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
                });
            });
            
            // Add hover animations to icons
            const hoverIcons = document.querySelectorAll('.icon-shake');
            hoverIcons.forEach(icon => {
                icon.addEventListener('mouseenter', () => {
                    icon.classList.add('animate-shake');
                });
                icon.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        icon.classList.remove('animate-shake');
                    }, 500);
                });
            });
        });
    </script>
</body>
</html>
