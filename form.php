
        <form action="contact_request.php" method="post">
          <h1>Contact Request Form</h1>

          <label>
            Name:
            <input name="name" type="text" placeholder="Jane Doe" required
          /></label>
          <label>
            Email:
            <input
              name="email"
              type="email"
              placeholder="janedoe@gmail.com"
              required
          /></label>
          <label>
            Phone: (optional)
            <input name="phone" type="tel" placeholder="XXX-XXX-XXXX"
          /></label>
          <label>
            Reason For Request: (optional)
            <textarea
              name="reason"
              cols="30"
              rows="5"
              id="name"
              type="text"
              placeholder="comments"
            ></textarea>
          </label>
          <button type="submit">Send Request</button>
        </form> 