import { StudentProvider } from "../context/StudentContext";
import "../styles/globals.css";

function MyApp({ Component, pageProps }) {
  return (
    <StudentProvider>
      <Component {...pageProps} />
    </StudentProvider>
  );
}

export default MyApp;
