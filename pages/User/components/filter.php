<div class="user__filters">
	<div class="popup"></div>
	<div class="user__filters-options--box">
		<div class="user__filters-options">
			<div>
				<label for="name">Name</label><input class="filters__input" id="name" name="name" placeholder="First name and/or Last name" type="text" value="">
			</div>
			<div>
				<label for="email">Email</label><input class="filters__input" id="email" name="email" placeholder="Email address" type="email" value="">
			</div>
			<div>
				<label for="number">Phone Number</label><input class="filters__input" id="number" name="number" placeholder="Email address" type="text" value="">
			</div>
			<div>
				<div class="analytics__input--container">
					<label for="status">Status</label><select class="analytics__input--dropdown" id="status" name="status">
						<option value="0">
							Student
						</option>
						<option value="1">
							Teacher
						</option>
						<option value="2">
							Dean
						</option>
						<option value="3">
							Co Teacher
						</option>
					</select>
				</div>
			</div>
		</div>
		<div class="user__filters-options">
			<div class="chip__box">
				<label for="number">Courses</label>
				<div class="chips">
					<div class="MuiButtonBase-root MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorDefault MuiChip-deletable MuiChip-deletableColorDefault MuiChip-filledDefault css-fzs0ba" role="button" tabindex="0">
						<span class="MuiChip-label MuiChip-labelMedium css-9iedg7">JNU 123</span><svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiChip-deleteIcon MuiChip-deleteIconMedium MuiChip-deleteIconColorDefault MuiChip-deleteIconFilledColorDefault css-vubbuv" data-testid="CancelIcon" viewbox="0 0 24 24">
						<path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path></svg>
					</div>
				</div>
				<div class="search">
					<div class="search__box">
						<input class="search__input" placeholder="Type to Search Courses" type="text" value="">
						<div class="search__clear">
							<svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-h6eos6" data-testid="ClearIcon" viewbox="0 0 24 24">
							<path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
						</div>
					</div>
				</div>
			</div>
			<div class="chip__box">
				<label for="number">Classes</label>
				<div class="chips"></div>
				<div class="search">
					<div class="search__box">
						<input class="search__input" placeholder="Type to Search Class" type="text" value="">
						<div class="search__clear">
							<svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-h6eos6" data-testid="ClearIcon" viewbox="0 0 24 24">
							<path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="user__filter-buttons">
		<button class="bordered__button warning__button">Reset Filter</button><button class="bordered__button">Filter</button><button class="bordered__button">Create User</button>
	</div>
</div>