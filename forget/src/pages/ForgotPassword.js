import {
  TextField,
  InputAdornment,
  Icon,
  IconButton,
  Button,
} from "@mui/material";
import "./ForgotPassword.css";

const ForgotPassword = () => {
  return (
    <div className="forgot-password">
      <div className="page-content">
        <div className="section-text">
          <div className="section-text">
            <b className="caption">Caption</b>
            <b className="main-headline">Lorem ipsum dolor sit amet.</b>
            <b className="secondary-headline">Forgotten your password?</b>
          </div>
          <div className="paragraph">
            We will send you a message to help you reset your password.
          </div>
        </div>
        <div className="form-2-fields-checkbox-b">
          <div className="fields-group">
            <div className="text-fieldtruetruefalsefal">
              <div className="text">Label Name</div>
              <div className="field">
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
                <div className="text1">Placeholder</div>
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
            <div className="text-fieldtruetruefalsefal">
              <div className="text">Label Name</div>
              <div className="field">
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
                <div className="text1">Placeholder</div>
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
          </div>
          <div className="text-field">
            <div className="label-and-field">
              <div className="label">Email Address</div>
              <TextField
                className="field2"
                color="success"
                label="Enter personal or work email address"
                required={true}
                error={true}
                variant="filled"
              />
            </div>
            <div className="description">Helper text goes here</div>
          </div>
          <div className="text-field1">
            <div className="label-and-field">
              <div className="label">Password</div>
              <div className="field3">
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
                <div className="text1">Placeholder</div>
                <img
                  className="icon-jam-icons-outline-l5"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
            <div className="description">Helper text goes here</div>
          </div>
          <div className="text-fieldtruetruefalsefal2">
            <div className="text">Label Name</div>
            <div className="field">
              <img
                className="icon-jam-icons-outline-l5"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
              <div className="text1">Placeholder</div>
              <img
                className="icon-jam-icons-outline-l5"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
            </div>
          </div>
          <div className="group">
            <div className="controls-with-label">
              <div className="controls">
                <div className="union-wrapper">
                  <img
                    className="union-icon"
                    alt=""
                    src="/icon--jamicons--outline--logos--search.svg"
                  />
                </div>
              </div>
              <div className="label-name">Remember me</div>
            </div>
            <div className="forgot-password1">Forgot Password?</div>
          </div>
          <Button className="button" color="primary" variant="contained">
            Send Reset Link
          </Button>
          <div className="vestibulum-faucibus-odio">
            Vestibulum faucibus odio vitae arcu auctor lectus.
          </div>
        </div>
      </div>
    </div>
  );
};

export default ForgotPassword;
