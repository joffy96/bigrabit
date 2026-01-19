# BiGRABiT Website

A PHP-based website for BiGRABiT - Indoor Navigation & Location Intelligence Solutions.

## 🚀 Quick Start with Docker

### Prerequisites
- [Docker](https://www.docker.com/products/docker-desktop/) installed on your machine

### Run the Project

1. **Clone the repository**
   ```bash
   git clone https://github.com/joffy96/bigrabit.git
   cd bigrabit
   ```

2. **Build and run with Docker Compose**
   ```bash
   docker-compose up -d --build
   ```

3. **Access the website**
   
   Open your browser and navigate to: **http://localhost:8080**

### Stop the Project
```bash
docker-compose down
```

### Rebuild after changes
```bash
docker-compose up -d --build
```

## 📁 Project Structure

```
bigrabit/
├── assets/          # CSS, JS, images, fonts
├── custom/          # Custom images and media
├── *.php            # PHP page files
├── Dockerfile       # Docker configuration
├── docker-compose.yml
└── README.md
```

## 🛠️ Technologies

- PHP 8.2
- Apache
- Bootstrap
- Docker
