# 🧾 Payroll Tracker

## 📋 Overview
The **Payroll Tracker** project is a web-based system designed to simplify employee payment management.  
It helps track attendance, compute salaries, generate payslips, and store payroll history in one place.

---

## ⚙️ Project Setup

### Requirements
- Node.js (v18+)
- npm or yarn
- MongoDB
- Git

---

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/payroll-tracker.git
   cd payroll-tracker
   ```

2. **Backend setup**
   ```bash
   cd backend
   npm install
   ```
   Create a `.env` file:
   ```env
   PORT=5000
   MONGO_URI=mongodb://localhost:27017/payrollDB
   JWT_SECRET=yourSecretKey
   ```

   Start the backend:
   ```bash
   npm run dev
   ```

3. **Frontend setup**
   ```bash
   cd ../frontend
   npm install
   ```
   Create a `.env` file:
   ```env
   VITE_API_BASE_URL=http://localhost:5000
   ```
   Start the frontend:
   ```bash
   npm run dev
   ```

---

## 🧩 Tech Stack

| Layer | Technology |
|-------|-------------|
| Frontend | React (Vite) + Tailwind CSS |
| Backend | Node.js + Express |
| Database | MongoDB + Mongoose |
| Authentication | JWT |
| Tools | Git, Postman |

---

## 🔄 Workflow

1. **Design Phase**
   - Gather requirements: employee data, salary components, attendance.
   - Create wireframes and database schema.

2. **Backend Development**
   - Setup Express server.
   - Build REST API endpoints for:
     - Employee CRUD
     - Attendance tracking
     - Payroll calculation
   - Add authentication and role-based access control.

3. **Frontend Development**
   - Build UI components: Dashboard, Employee List, Payroll Summary.
   - Connect frontend to backend APIs using Axios.
   - Implement responsive and interactive design.

4. **Integration & Testing**
   - Integrate API endpoints with frontend.
   - Validate payroll computations.
   - Test authentication and access restrictions.

5. **Deployment**
   - Optionally use Docker for containerization.
   - Deploy backend to Render/AWS and frontend to Vercel/Netlify.

---

## 📈 Future Enhancements
- Role-based permissions (Admin, HR, Employee)
- PDF/Excel report exports
- Automated tax & pension deductions
- Email notifications for payslips
- Integration with biometric attendance systems

---

## 👨‍💻 Contributors
- **Project Lead:** Adebayo Bushrah Bisola
- **Backend Developer:** Eze Stephen Chigbogu
- **Frontend Developer:** Ahanonu Chinemerem Samuel
- **UI/UX Designer:** Benson Charles Kelechukwu
- **QA Engineer:** Ifeanyichukwu Chiagoziem
- **Database Architect:** Chijioke Chidiebube
- **DevOps Engineer:** Ezechukwu Chidubem Michael
- **System Analyst:** Nwagu-Ajana Chidubem Divine

---

## 📄 License
Licensed under the [MIT License](LICENSE).
