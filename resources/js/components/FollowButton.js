import axios from "axios";
import React, { useState } from "react";
import ReactDOM from "react-dom";

function FollowButton(props) {
    const [follows, setFollows] = useState(props.follows);
    let { user_id } = props;

    const followUser = async () => {
        try {
            const { data } = await axios.post(`/follow/${user_id}`);
            setFollows(!follows);
            console.log(data);
        } catch (error) {
            if (error.response.status == 401) {
                window.location = "/login";
            }
        }
    };

    return (
        <>
            <button className="btn btn-primary ml-3" onClick={followUser}>
                {follows ? `Unfollow` : `Follow`}
            </button>
        </>
    );
}

export default FollowButton;

const element = document.getElementById("follow-wrapper");

if (element) {
    const props = Object.assign({}, element.dataset);
    ReactDOM.render(<FollowButton {...props} />, element);
}
