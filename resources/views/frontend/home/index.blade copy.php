<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopX Internet - High Speed Internet Service Provider</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #1a202c;
            overflow-x: hidden;
            background: #0f0f1e;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background: rgba(15, 15, 30, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 1.2rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            letter-spacing: -0.5px;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 50%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo span {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #00f5ff, #0084ff);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: #00f5ff;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: #0f0f1e;
            position: relative;
            color: white;
            padding: 180px 0 120px;
            text-align: center;
            margin-top: 70px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(0, 245, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(0, 132, 255, 0.1) 0%, transparent 50%);
            animation: gradientMove 15s ease infinite;
        }

        @keyframes gradientMove {
            0%, 100% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.2) rotate(180deg); }
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -2px;
            background: linear-gradient(135deg, #ffffff 0%, #00f5ff 50%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease;
            position: relative;
            z-index: 1;
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            opacity: 0.8;
            font-weight: 400;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 1s ease 0.2s both;
            position: relative;
            z-index: 1;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            color: white;
            padding: 18px 45px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.4s both;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0084ff 0%, #8b5cf6 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0, 132, 255, 0.4);
        }

        .cta-button:hover::before {
            opacity: 1;
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: #0f0f1e;
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 4rem;
            font-weight: 800;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #ffffff 0%, #00f5ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(139, 92, 246, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-15px) scale(1.02);
            border-color: rgba(0, 245, 255, 0.5);
            box-shadow: 0 20px 60px rgba(0, 245, 255, 0.2);
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            padding: 20px;
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(0, 132, 255, 0.1) 100%);
            border-radius: 20px;
            transition: transform 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #ffffff;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.7);
            position: relative;
            z-index: 1;
            line-height: 1.8;
        }

        /* Packages Section */
        .packages {
            padding: 100px 0;
            background: linear-gradient(180deg, #0f0f1e 0%, #1a1a2e 100%);
            position: relative;
        }

        .packages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .package-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 3rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.05) 0%, rgba(139, 92, 246, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .package-card:hover {
            transform: scale(1.05) translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 245, 255, 0.2);
            border-color: rgba(0, 245, 255, 0.5);
        }

        .package-card:hover::before {
            opacity: 1;
        }

        .package-card.featured {
            border-color: rgba(0, 245, 255, 0.5);
            box-shadow: 0 20px 50px rgba(0, 245, 255, 0.3);
            background: rgba(0, 245, 255, 0.05);
        }

        .package-badge {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: #0f0f1e;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(251, 191, 36, 0.3);
        }

        .package-name {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        .package-speed {
            font-size: 4rem;
            font-weight: 900;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            letter-spacing: -2px;
        }

        .package-speed span {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .package-price {
            font-size: 3rem;
            font-weight: 900;
            color: #ffffff;
            margin: 2rem 0;
            letter-spacing: -1px;
        }

        .package-price span {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 500;
        }

        .package-features {
            list-style: none;
            margin: 2rem 0;
            text-align: left;
        }

        .package-features li {
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.05rem;
        }

        .package-features li::before {
            content: '✓';
            color: #00f5ff;
            font-weight: bold;
            margin-right: 12px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: rgba(0, 245, 255, 0.1);
        }

        .package-button {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            color: white;
            padding: 18px 30px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1.05rem;
            position: relative;
            overflow: hidden;
        }

        .package-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0084ff 0%, #8b5cf6 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .package-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 245, 255, 0.4);
        }

        .package-button:hover::before {
            opacity: 1;
        }

        .package-button span {
            position: relative;
            z-index: 1;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background: #0f0f1e;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 80% 20%, rgba(0, 245, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 20% 80%, rgba(139, 92, 246, 0.15) 0%, transparent 50%);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .contact-card {
            text-align: center;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 245, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
        }

        .contact-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            padding: 20px;
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(0, 132, 255, 0.1) 100%);
            border-radius: 20px;
        }

        .contact-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .contact-card p {
            color: rgba(255, 255, 255, 0.8);
        }

        .contact-card a {
            color: #00f5ff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .contact-card a:hover {
            color: #0084ff;
        }

        /* Stats Section */
        .stats {
            padding: 100px 0;
            background: linear-gradient(180deg, #1a1a2e 0%, #0f0f1e 100%);
            position: relative;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            text-align: center;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 245, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 900;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            letter-spacing: -2px;
        }

        .stat-label {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }

        /* Coverage Section */
        .coverage {
            padding: 100px 0;
            background: #0f0f1e;
            position: relative;
        }

        .coverage-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-top: 3rem;
        }

        .coverage-text h3 {
            font-size: 2rem;
            color: #ffffff;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .coverage-text p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .coverage-list {
            list-style: none;
            margin-top: 2rem;
        }

        .coverage-list li {
            padding: 1rem 0;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }

        .coverage-list li::before {
            content: '📍';
            margin-right: 15px;
            font-size: 1.5rem;
        }

        .coverage-map {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .coverage-map::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0, 245, 255, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.2); opacity: 0.8; }
        }

        .coverage-map-icon {
            font-size: 8rem;
            position: relative;
            z-index: 1;
        }

        /* How It Works Section */
        .how-it-works {
            padding: 100px 0;
            background: linear-gradient(180deg, #0f0f1e 0%, #1a1a2e 100%);
            position: relative;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
        }

        .step-card {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 2rem;
            font-weight: 900;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 245, 255, 0.3);
            transition: all 0.3s ease;
        }

        .step-card:hover .step-number {
            transform: scale(1.1) rotate(5deg);
        }

        .step-card h3 {
            font-size: 1.5rem;
            color: #ffffff;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .step-card p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 100px 0;
            background: #0f0f1e;
            position: relative;
            overflow: hidden;
        }

        .testimonials::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 10% 20%, rgba(0, 245, 255, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(139, 92, 246, 0.08) 0%, transparent 50%);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 245, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
        }

        .testimonial-card::before {
            content: '❝';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: rgba(0, 245, 255, 0.2);
            font-family: Georgia, serif;
        }

        .testimonial-text {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            margin-bottom: 2rem;
            font-size: 1.05rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }

        .author-info h4 {
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .author-info p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        .rating {
            margin-top: 1rem;
            color: #fbbf24;
            font-size: 1.2rem;
        }

        /* FAQ Section */
        .faq {
            padding: 100px 0;
            background: linear-gradient(180deg, #1a1a2e 0%, #0f0f1e 100%);
            position: relative;
        }

        .faq-container {
            max-width: 900px;
            margin: 3rem auto 0;
        }

        .faq-item {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            margin-bottom: 1.5rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            border-color: rgba(0, 245, 255, 0.3);
        }

        .faq-question {
            padding: 1.5rem 2rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            color: #00f5ff;
        }

        .faq-icon {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
            color: #00f5ff;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
            padding: 0 2rem 1.5rem;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: #0f0f1e;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 50% 50%, rgba(0, 245, 255, 0.15) 0%, transparent 70%);
        }

        .cta-content {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .cta-content h2 {
            font-size: 3.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #ffffff 0%, #00f5ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            letter-spacing: -2px;
        }

        .cta-content p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-button-primary {
            display: inline-block;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            color: white;
            padding: 18px 45px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .cta-button-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0, 132, 255, 0.4);
        }

        .cta-button-secondary {
            display: inline-block;
            background: transparent;
            color: #00f5ff;
            padding: 18px 45px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: 2px solid #00f5ff;
            cursor: pointer;
        }

        .cta-button-secondary:hover {
            background: rgba(0, 245, 255, 0.1);
            transform: translateY(-3px);
        }

        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #00f5ff 0%, #0084ff 100%);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 245, 255, 0.3);
            opacity: 0;
            visibility: hidden;
            transform: translateY(100px);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 999;
            backdrop-filter: blur(10px);
        }

        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .scroll-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 15px 40px rgba(0, 245, 255, 0.5);
        }

        .scroll-to-top::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0084ff 0%, #8b5cf6 100%);
            border-radius: 50%;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .scroll-to-top:hover::before {
            opacity: 1;
        }

        .scroll-to-top span {
            position: relative;
            z-index: 1;
        }

        /* Footer */
        footer {
            background: rgba(15, 15, 30, 0.95);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            text-align: center;
            padding: 3rem 0;
        }

        footer p {
            opacity: 0.7;
            font-size: 0.95rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(15, 15, 30, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 1rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .hero h1 {
                font-size: 2.5rem;
                letter-spacing: -1px;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .package-speed {
                font-size: 3rem;
            }

            .package-price {
                font-size: 2.5rem;
            }

            .packages-grid {
                grid-template-columns: 1fr;
            }

            .coverage-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .cta-content h2 {
                font-size: 2.5rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-buttons a {
                width: 100%;
                max-width: 300px;
                text-align: center;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <nav class="container">
            <div class="logo">
                Shop<span>X</span> Internet
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#packages">Packages</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Lightning Fast Internet at Your Doorstep</h1>
            <p>Experience the next generation of high-speed internet connectivity with our fiber optic technology</p>
            <a href="#packages" class="cta-button">View Our Packages</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Why Choose ShopX Internet?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Ultra High Speed</h3>
                    <p>Experience blazing fast internet speeds up to 1 Gbps for seamless streaming and browsing</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Secure Connection</h3>
                    <p>Advanced security features to protect your data and privacy online</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock customer support to assist you whenever you need help</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Affordable Pricing</h3>
                    <p>Competitive prices with no hidden fees or contracts</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats" id="stats">
        <div class="container">
            <h2 class="section-title">Trusted by Thousands</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number" data-target="50000">0</div>
                    <div class="stat-label">Happy Customers</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-target="99">0</div>
                    <div class="stat-label">% Uptime Guarantee</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-target="500">0</div>
                    <div class="stat-label">Cities Covered</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-target="24">0</div>
                    <div class="stat-label">24/7 Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="packages" id="packages">
        <div class="container">
            <h2 class="section-title">Our Internet Packages</h2>
            <div class="packages-grid">
                <!-- Basic Package -->
                <div class="package-card">
                    <div class="package-name">Basic</div>
                    <div class="package-speed">50<span>Mbps</span></div>
                    <div class="package-price">$29<span>/month</span></div>
                    <ul class="package-features">
                        <li>50 Mbps Download Speed</li>
                        <li>10 Mbps Upload Speed</li>
                        <li>Unlimited Data</li>
                        <li>Free Installation</li>
                        <li>Email Support</li>
                    </ul>
                    <button class="package-button" onclick="selectPackage('Basic')"><span>Choose Plan</span></button>
                </div>

                <!-- Standard Package -->
                <div class="package-card featured">
                    <span class="package-badge">Most Popular</span>
                    <div class="package-name">Standard</div>
                    <div class="package-speed">200<span>Mbps</span></div>
                    <div class="package-price">$49<span>/month</span></div>
                    <ul class="package-features">
                        <li>200 Mbps Download Speed</li>
                        <li>50 Mbps Upload Speed</li>
                        <li>Unlimited Data</li>
                        <li>Free Installation</li>
                        <li>24/7 Phone Support</li>
                        <li>Free Router</li>
                    </ul>
                    <button class="package-button" onclick="selectPackage('Standard')"><span>Choose Plan</span></button>
                </div>

                <!-- Premium Package -->
                <div class="package-card">
                    <div class="package-name">Premium</div>
                    <div class="package-speed">1<span>Gbps</span></div>
                    <div class="package-price">$79<span>/month</span></div>
                    <ul class="package-features">
                        <li>1000 Mbps Download Speed</li>
                        <li>500 Mbps Upload Speed</li>
                        <li>Unlimited Data</li>
                        <li>Free Installation</li>
                        <li>Priority 24/7 Support</li>
                        <li>Premium Router</li>
                        <li>Static IP Address</li>
                    </ul>
                    <button class="package-button" onclick="selectPackage('Premium')"><span>Choose Plan</span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Section -->
    <section class="coverage" id="coverage">
        <div class="container">
            <h2 class="section-title">Extensive Coverage Area</h2>
            <div class="coverage-content">
                <div class="coverage-text">
                    <h3>Available in Your Area</h3>
                    <p>We're expanding our fiber network across major cities and suburbs, bringing ultra-fast internet to more homes and businesses every day.</p>
                    <p>Our state-of-the-art infrastructure ensures reliable, high-speed connectivity with minimal latency and maximum performance.</p>
                    <ul class="coverage-list">
                        <li>Downtown Metro Areas</li>
                        <li>Suburban Communities</li>
                        <li>Business Districts</li>
                        <li>Residential Neighborhoods</li>
                        <li>Educational Institutions</li>
                    </ul>
                </div>
                <div class="coverage-map">
                    <div class="coverage-map-icon">🗺️</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <h2 class="section-title">Get Connected in 3 Easy Steps</h2>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Choose Your Plan</h3>
                    <p>Select the perfect internet package that fits your needs and budget. All plans include unlimited data and free installation.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Schedule Installation</h3>
                    <p>Our expert technicians will visit your location at your convenience and set up your connection professionally.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Enjoy High-Speed Internet</h3>
                    <p>Start streaming, gaming, and browsing with blazing-fast speeds and reliable connectivity from day one.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Switched to ShopX Internet 6 months ago and couldn't be happier! The speed is incredible, and I've never experienced any downtime. Perfect for working from home!"
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">SM</div>
                        <div class="author-info">
                            <h4>Sarah Mitchell</h4>
                            <p>Remote Software Engineer</p>
                        </div>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Best ISP I've ever used! Customer support is responsive, installation was quick, and the pricing is very competitive. Highly recommend to everyone!"
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">JC</div>
                        <div class="author-info">
                            <h4>John Chen</h4>
                            <p>Small Business Owner</p>
                        </div>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Finally, an internet service that delivers what it promises! Streaming 4K content is seamless, and gaming has never been better with such low latency."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">ER</div>
                        <div class="author-info">
                            <h4>Emily Rodriguez</h4>
                            <p>Content Creator</p>
                        </div>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does installation take?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        Professional installation typically takes 2-4 hours. Our certified technicians will ensure everything is set up properly and test your connection before leaving.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Is there a data cap on your plans?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        No! All our plans come with unlimited data. Stream, download, and browse as much as you want without worrying about overage charges or throttling.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What equipment do I need?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        We provide a high-quality router with most plans. For the Premium package, you'll receive our latest WiFi 6 router at no extra cost. You can also use your own compatible equipment if preferred.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I upgrade or downgrade my plan later?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        Absolutely! You can change your plan at any time through our customer portal or by contacting support. Changes take effect within 24 hours with no service interruption.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What's your customer support availability?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        We offer 24/7 customer support via phone, email, and live chat. Our technical team is always ready to help you with any questions or issues.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Are there any contracts or hidden fees?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        No contracts required! We believe in earning your business every month. The price you see is what you pay - no activation fees, no hidden charges, and no surprises.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Lightning-Fast Internet?</h2>
                <p>Join thousands of satisfied customers enjoying reliable, high-speed internet. Get started today with our easy installation process!</p>
                <div class="cta-buttons">
                    <a href="#packages" class="cta-button-primary">View Our Packages</a>
                    <a href="#contact" class="cta-button-secondary">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">📞</div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@shopxinternet.com">info@shopxinternet.com</a></p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">📍</div>
                    <h3>Visit Us</h3>
                    <p>123 Internet Street, Tech City, TX 12345</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2026 ShopX Internet. All rights reserved. | High Speed Internet Service Provider</p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop">
        <span>↑</span>
    </button>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');

        mobileMenuBtn.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        const navItems = document.querySelectorAll('.nav-links a');
        navItems.forEach(item => {
            item.addEventListener('click', function() {
                navLinks.classList.remove('active');
            });
        });

        // Package Selection
        function selectPackage(packageName) {
            alert('You selected the ' + packageName + ' package! Our team will contact you shortly to complete the setup.');
            // You can add more functionality here, like sending data to a server
        }

        // Smooth scroll for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll animation for cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.feature-card, .package-card').forEach(card => {
            observer.observe(card);
        });

        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(15, 15, 30, 0.95)';
                header.style.boxShadow = '0 5px 30px rgba(0, 245, 255, 0.1)';
            } else {
                header.style.background = 'rgba(15, 15, 30, 0.8)';
                header.style.boxShadow = 'none';
            }
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const hero = document.querySelector('.hero');
            const scrolled = window.pageYOffset;
            hero.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
        });

        // Counter Animation for Stats
        const counters = document.querySelectorAll('.stat-number');
        let counterStarted = false;

        function startCounter(counter) {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.ceil(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target.toLocaleString();
                }
            };
            updateCounter();
        }

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !counterStarted) {
                    counterStarted = true;
                    counters.forEach(counter => startCounter(counter));
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Close all other items
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                });

                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

        // Enhanced scroll animations for all sections
        const allAnimatedElements = document.querySelectorAll('.stat-card, .step-card, .testimonial-card, .coverage-text, .coverage-map');
        allAnimatedElements.forEach(element => {
            observer.observe(element);
        });

        // Add stagger animation to steps
        const steps = document.querySelectorAll('.step-card');
        steps.forEach((step, index) => {
            step.style.animationDelay = `${index * 0.2}s`;
        });

        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scrollToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
